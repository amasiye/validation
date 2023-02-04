<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Interfaces\IValidationRule;

#[Attribute(Attribute::TARGET_PROPERTY)]
abstract class ValidationAttribute
{
  public bool $passes = false;
  protected IValidationRule $rule;

  public function getRule(): IValidationRule
  {
    return $this->rule;
  }
}