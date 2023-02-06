<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Checks if given value is not empty (!== '', !== null, !== undefined).
 */
class NotEmptyValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = "Input must not be empty")
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_bool($value) || is_numeric($value) || !empty($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}