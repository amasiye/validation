<?php


namespace Tests\Unit;

use Assegai\Validation\Mock\IncompleteInvalidMockDTO;
use Assegai\Validation\Mock\IncompleteValidMockDto;
use Assegai\Validation\Mock\InvalidMockDto;
use Assegai\Validation\Mock\ValidMockDto;
use Assegai\Validation\Validator;
use Tests\Support\UnitTester;

class ValidatorCest
{
  protected ?Validator $validator = null;
  public function _before(UnitTester $I)
  {
    $this->validator = new Validator();
  }

  // tests
  public function checkTheValidateMethod(UnitTester $I): void
  {
    $value = 'assegai@gmail.com';
    $I->assertTrue($this->validator->validate($value, 'required|email'));

    $value = 'this is an exceptionally long string';
    $I->assertFalse($this->validator->validate($value, 'maxLength:10'));

    $this->validator = new Validator();
    $I->assertTrue($this->validator->validate($value, 'maxLength:100'));
  }

  public function checkTheValidateclassMethod(UnitTester $I): void
  {
    $validDto = new ValidMockDto();
    $invalidDto = new InvalidMockDto();
    $incompleteValidDto = new IncompleteValidMockDto();
    $incompleteInvalidDto = new IncompleteInvalidMockDTO();

    $I->assertTrue($this->validator->validateClass($validDto));
    $I->assertTrue($this->validator->validateClass($incompleteValidDto));
    $I->assertFalse($this->validator->validateClass($invalidDto));
    $I->assertFalse($this->validator->validateClass($incompleteInvalidDto));
  }

  public function checkThePassesMethod(UnitTester $I): void
  {
    $value = 'this is an exceptionally long string';
    $I->assertTrue($this->validator->validate($value, 'maxLength:100'));
    $I->assertTrue($this->validator->passes());
  }

  public function checkTheFailsMethod(UnitTester $I): void
  {
    $value = 'this is an exceptionally long string';
    $I->assertFalse($this->validator->validate($value, 'maxLength:10'));
    $I->assertTrue($this->validator->fails());
  }

  public function checkTheGeterrorsMethod(UnitTester $I): void
  {
    $value = 'this is an exceptionally long string';
    $I->assertFalse($this->validator->validate($value, 'maxLength:10'));
    $I->assertNotEmpty($this->validator->getErrors());
  }
}
