<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

class JsonValidationRule implements IValidationRule
{
  public function __construct(
    protected int $depth = 512,
    protected string $errorMessage = 'Input must be a valid JSON string'
  )
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

    $json = json_decode($value);

    return json_last_error() === JSON_ERROR_NONE;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}