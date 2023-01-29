<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * This class defines a rule that checks whether a given value is a string of a length
 * that is less than or equal to a specified maximum length.
 */
readonly class MaxLengthValidationRule implements IValidationRule
{
  /**
   * Constructs the MaxLengthValidationRule
   * 
   * @param int $maxLength The maximum length.
   */
  public function __construct(protected int $maxLength)
  {
  }

  public function passes(mixed $value): bool
  {
    if (!is_string($value))
    {
      return false;
    }

    return strlen($value) <= $this->maxLength;
  }

  public function getErrorMessage(): string
  {
    return "Input must be a string no longer than {$this->maxLength} characters.";
  }
}
