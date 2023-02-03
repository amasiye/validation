<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use Stringable;

/**
 * Check that a field contains a string value.
 */
class StringValidationRule implements IValidationRule
{
  public function __construct(
    protected int $minLength = 0,
    protected int $maxLength = PHP_INT_MAX,
    protected string $errorMessage = "Input must be a string"
  )
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return is_string($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}