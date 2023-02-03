<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * This class defines a rule that checks whether a given value is a string of a length
 * that is greater than or equal to a specified minimum length.
 */
class MinLengthValidationRule implements IValidationRule
{
  /**
   * Constructs the MinLengthValidationRule
   *
   * @param int $minLength The minimum length.
   */
  public function __construct(protected int $minLength)
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    if (!is_string($value))
    {
      return false;
    }

    return strlen($value) >= $this->minLength;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be a string no longer than {$this->minLength} characters.";
  }
}