<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\AlphaValidationRule;
use Attribute;

/**
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsAlpha extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new AlphaValidationRule();
  }
}