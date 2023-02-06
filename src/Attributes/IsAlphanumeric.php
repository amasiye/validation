<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\AlphaNumericValidationRule;
use Attribute;

/**
 * Checks if the string contains only letters and numbers.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsAlphanumeric extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new AlphaNumericValidationRule();
  }
}