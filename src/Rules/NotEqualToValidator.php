<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use Stringable;

class NotEqualToValidator implements IValidationRule
{
  public function __construct(public mixed $target)
  {
  }

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    return $this->target !== $value;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    $target = $this->target;

    return "Input must not be equal to $target";
  }
}