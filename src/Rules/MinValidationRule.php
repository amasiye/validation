<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field at least a minimum value.
 */
class MinValidationRule implements IValidationRule
{
  public function __construct(protected int|float $min)
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_numeric($value) && $value > $this->min;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be at least $this->min";
  }
}