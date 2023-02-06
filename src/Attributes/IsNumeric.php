<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\NumericValidationRule;

/**
 * Check if the value is a number (i.e. an integer or a float and NOT a string)
 */
class IsNumeric extends ValidationAttribute
{
  public function __construct(protected object|array|null $options = null)
  {
    $this->rule = new NumericValidationRule();
  }
}