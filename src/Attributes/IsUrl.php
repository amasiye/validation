<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\URLValidationRule;
use Attribute;

/**
 * Checks if the value is a valid URL.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsUrl extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new URLValidationRule();
  }
}