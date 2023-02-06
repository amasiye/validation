<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\EmptyValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsEmpty extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new EmptyValidationRule();
  }
}