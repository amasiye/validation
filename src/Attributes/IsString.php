<?php

namespace Assegai\Validation\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class IsString
{
  /**
   * @param ?bool $each Specifies if validated value is an array and each of its items must be validated.
   * @param string|callable|null $message Error message to be used on validation fail.
   * Message can be either string or a function that returns a string.
   * @param ?array $groups Validation groups used for this validation.
   * @param ?bool $always Indicates if validation must be performed always, no matter of validation groups used.
   * @param mixed $context A transient set of data passed through to the validation result for response mapping
   */
  public function __construct(
    public readonly ?bool $each = null,
    public readonly string|callable|null $message = 'Input must be a string.',
    public readonly ?array $groups = null,
    public readonly ?bool $always = null,
    public readonly mixed $context = null,
  )
  {
  }
}