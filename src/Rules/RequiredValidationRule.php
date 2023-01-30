<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field is not empty.
 */
class RequiredValidationRule implements IValidationRule
{

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return match (true) {
      is_string($value) => !empty($value),
      default => !is_null($value)
    };
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must not be empty";
  }
}