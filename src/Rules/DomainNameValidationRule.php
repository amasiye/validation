<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use Arubacao\TldChecker\Validator as TLDValidator;

/**
 * Validates a string value as a valid domain name.
 */
class DomainNameValidationRule implements IValidationRule
{
  /**
   * Constructs a DomainNameValidationRule
   * @param string $errorMessage The error message to display on failure.
   */
  public function __construct(protected string $errorMessage = "Input must be a valid domain name")
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    $isValid = preg_match("/^(?!www.)(?:a-z0-9?.)+[a-z0-9][a-z0-9-]{0,61}[a-z0-9]$/", $value);

    return $isValid ?: TLDValidator::endsWithTld($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}