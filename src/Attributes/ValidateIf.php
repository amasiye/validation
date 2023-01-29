<?php

namespace Assegai\Validation\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class ValidateIf
{
  public readonly bool $value;

  public function __construct(callable $condition)
  {
    $this->value = (bool)$condition() ?? false;
  }
}