<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field contains only alphabetic characters.
 */
class AlphaValidationRule implements IValidationRule
{

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return ctype_alpha($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must contain only alphabetic characters";
  }
}