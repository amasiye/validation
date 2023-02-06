<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\NotEmptyValidationRule;

class IsNotEmpty extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new NotEmptyValidationRule();
  }
}