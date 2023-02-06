<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\AsciiValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsAscii extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new AsciiValidationRule();
  }
}