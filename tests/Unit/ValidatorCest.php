<?php


namespace Tests\Unit;

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
