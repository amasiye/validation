<?php

namespace Assegai\Validation\Attributes;

use Attribute;

/**
 * Checks if the given value is empty (=== null) and if so, ignores all the validators on the property.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsOptional extends ValidationAttribute
{
  public function __construct()
  {
  }
}
