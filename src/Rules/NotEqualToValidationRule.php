<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use Stringable;

class NotEqualToValidationRule implements IValidationRule
{
  public function __construct(
    public mixed $target,
    protected ?string $errorMessage = null
  )
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
    if ($this->errorMessage)
    {
      return $this->errorMessage;
    }

    $target = match (true) {
      is_object($this->target) && !is_subclass_of($this->target, Stringable::class),
      is_array($this->target) => json_encode($this->target),
      default => $this->target
    };

    return "Input must not be equal to $target";
  }
}