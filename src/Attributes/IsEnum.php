<?php

namespace Assegai\Validation\Attributes;

use Assegai\Validation\Exceptions\ValidationException;
use Assegai\Validation\Rules\EnumValidationRule;

/**
 * Checks if the value is a valid enum.
 */
class IsEnum extends ValidationAttribute
{
  /**
   * @param string $enum The name of the Enum class.
   * @throws ValidationException
   */
  public function __construct(protected string $enum)
  {
    $this->rule = new EnumValidationRule($this->enum);
  }
}
