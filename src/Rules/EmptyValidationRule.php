<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Checks if given value is empty (=== '', === null, === undefined).
 */
class EmptyValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = 'Input value must be empty')
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return !isset($value) || (!is_bool($value) && !is_numeric($value) && empty($value));
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}