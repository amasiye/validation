<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Check that a field matches a regular expression pattern.
 */
class RegexValidationRule implements IValidationRule
{
  public function __construct(protected readonly string $pattern)
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return (bool)preg_match("/$this->pattern/", $value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return "Input must be match the given pattern.";
  }
}