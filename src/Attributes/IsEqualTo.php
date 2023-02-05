<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\EqualToValidationRule;
use Attribute;

/**
 * Checks if the value is equal to a specified target value.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsEqualTo extends ValidationAttribute
{
  /**
   * @param mixed $target
   */
  public function __construct(public readonly mixed $target)
  {
    $this->rule = new EqualToValidationRule($this->target);
  }
}