<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\NotEmptyValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsNotEmpty extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new NotEmptyValidationRule();
  }
}