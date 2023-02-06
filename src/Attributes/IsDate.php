<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Rules\DateValidationRule;
use Attribute;
use DateTimeInterface;

/**
 * Checks if the value is a date.
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class IsDate extends ValidationAttribute
{
  /**
   * @param string $format The expected date format. Default: 'Y-m-d\TH:i:sP'
   */
  public function __construct(protected string $format = DateTimeInterface::ATOM)
  {
    $this->rule = new DateValidationRule($this->format);
  }
}