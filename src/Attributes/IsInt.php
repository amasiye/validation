<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\IntegerValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsInt extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new IntegerValidationRule();
  }
}