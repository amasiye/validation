<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field contains only alphanumeric characters.
 */
class AlphaNumericValidationRule implements IValidationRule
{

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return ctype_alnum($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must contain only alphanumeric characters";
  }
}