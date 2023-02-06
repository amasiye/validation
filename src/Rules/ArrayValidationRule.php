<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

class ArrayValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = 'Input must be a valid array')
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_array($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}