<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\DomainNameValidationRule;
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsDomain extends ValidationAttribute
{
  public function __construct()
  {
    $this->rule = new DomainNameValidationRule();
  }
}