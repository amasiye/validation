<?php


namespace Tests\Unit;

use Assegai\Validation\Rules\MaxLengthValidationRule;
use Assegai\Validation\Validator;
use Tests\Support\UnitTester;

class MaxLengthRuleCest
{
  public function _before(UnitTester $I)
  {
    require './vendor/autoload.php';
  }

  // tests
  public function testValidLength(UnitTester $I)
  {
    $rule = new MaxLengthValidationRule(10);

    // Test valid length
    $I->assertTrue($rule->passes('012345678'));
    $I->assertFalse($rule->passes('This is a string that is longer than 10 characters'));
    $I->assertEquals('Input must be a string no longer than 10 characters.', $rule->getErrorMessage());
  }
}
