<?php


namespace Tests\Unit;

use App\Validation\Rules\MaxLengthRule;
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
        $validator = new Validator([new MaxLengthRule(maxLength: 10)]);
        
        // Test valid length
        $this->assertTrue($validator->validate('012345678'));
    }
}
