<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Checks value must be between min and max (inclusive)
 */
class BetweenValidationRule implements IValidationRule
{
  public function __construct(
    protected mixed $min,
    protected mixed $max
  )
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return $value > $this->min && $value <= $this->max;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be a value between $this->min and $this->max inclusive";
  }
}