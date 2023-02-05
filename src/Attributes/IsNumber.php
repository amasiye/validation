<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\NumericValidationRule;
use Attribute;

/**
 * Checks if the value is a number
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsNumber extends ValidationAttribute
{
  public function __construct(protected object|array|null $options = null)
  {
    $this->rule = new NumericValidationRule();
  }
}