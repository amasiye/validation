<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field does not exceed a maximum value.
 */
class MaxValidationRule implements IValidationRule
{
  public function __construct(protected int|float $max)
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_numeric($value) && $value < $this->max;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must not exceed $this->max";
  }
}