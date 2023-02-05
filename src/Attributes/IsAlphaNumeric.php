<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\AlphaNumericValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsAlphaNumeric extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new AlphaNumericValidationRule();
  }
}