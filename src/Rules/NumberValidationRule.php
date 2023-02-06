<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

class NumberValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = 'Input must be a valid number')
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_numeric($value) && !is_string($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}