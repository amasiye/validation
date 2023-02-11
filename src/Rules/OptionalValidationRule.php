<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

class OptionalValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = 'Input must be empty (=== null)')
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_null($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}