<?php

namespace Assegai\Validation\Interfaces;

interface IRule
{
  /**
   * Returns a boolean indicating whether the value passes the rule. 
   * @param mixed $value The value to be checked.
   * 
   * @return bool Returns TRUE if the value passes the rule, otherwise.
   */
  public function passes(mixed $value): bool;

  /**
   * Returns a string containing an error message to display if the value does not pass the rule.
   * @return string Returns a string containing an error message.
   */
  public function getErrorMessage(): string;
}