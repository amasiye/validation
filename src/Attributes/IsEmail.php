<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\EmailValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsEmail extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new EmailValidationRule();
  }
}