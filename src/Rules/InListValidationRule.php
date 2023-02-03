<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field is in a specific list of allowed values.
 */
class InListValidationRule implements IValidationRule
{
  public function __construct(protected array $list)
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return in_array($value, $this->list);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be in the specified list of allowed values";
  }
}