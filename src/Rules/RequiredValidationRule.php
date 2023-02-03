<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field is not empty.
 */
class RequiredValidationRule implements IValidationRule
{
  /**
   * Constructs a RequiredValidationRule
   * @param string $errorMessage
   */
  public function __construct(protected string $errorMessage = "Input is required and must not be empty")
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return match (true) {
      is_array($value),
      is_string($value) => !empty($value),
      default => !is_null($value)
    };
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}