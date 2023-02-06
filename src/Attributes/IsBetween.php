<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\BetweenValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsBetween extends ValidationAttribute
{
  public function __construct(float|int $min, float|int $max)
  {
    $this->rule = new BetweenValidationRule($min, $max);
  }
}