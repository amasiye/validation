<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\StringValidationRule;
use Attribute;

/**
 * Checks if the value is a valid string.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsString extends ValidationAttribute
{
  /**
   * @param array|object|null $options
   */
  public function __construct(protected array|object|null $options = null)
  {
    $this->rule = new StringValidationRule();
  }
}