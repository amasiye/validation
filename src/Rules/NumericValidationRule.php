<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field contains a numeric value.
 */
class NumericValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = "Input must contain a numeric value.")
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_numeric($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}