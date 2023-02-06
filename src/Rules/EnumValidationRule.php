<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Exceptions\ValidationException;
use Assegai\Validation\Interfaces\IValidationRule;

class EnumValidationRule implements IValidationRule
{
  public function __construct(
    protected string $enum,
    protected string $errorMessage = 'Input must be a valid enum'
  )
  {
    if (!enum_exists($this->enum))
    {
      throw new ValidationException("$this->enum is not a known enum type");
    }
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    if (is_string($value))
    {
      $value = $this->enum::tryFrom($value);
    }
    $rule = new InListValidationRule($this->enum::cases());
    return $rule->passes($value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}
