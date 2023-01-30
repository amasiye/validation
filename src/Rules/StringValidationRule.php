<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field contains an string value.
 */
class StringValidationRule implements IValidationRule
{

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_string($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be a string";
  }
}