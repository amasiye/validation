<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Interfaces\IValidationRule;

#[Attribute(Attribute::TARGET_PROPERTY)]
abstract class ValidationAttribute
{
  protected IValidationRule $rule;

  public function getRule(): IValidationRule
  {
    return $this->rule;
  }
}