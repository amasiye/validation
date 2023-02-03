<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field contains a valid URL.
 */
class URLValidationRule implements IValidationRule
{

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return filter_var($value, FILTER_VALIDATE_URL);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be a valid URL.";
  }
}