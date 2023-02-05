<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\ArrayValidationRule;
use Attribute;

/**
 * Checks if the value is an array
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsArray extends ValidationAttribute
{
  /**
   * Constructs the IsArray instance.
   */
  public function __construct()
  {
    $this->rule = new ArrayValidationRule();
  }
}