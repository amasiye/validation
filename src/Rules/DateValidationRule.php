<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use DateTime;
use DateTimeInterface;

class DateValidationRule implements IValidationRule
{
  public function __construct(
    protected string $format = DateTimeInterface::ATOM,
    protected string $errorMessage = 'The value must be a valid date string or a DateTime object.'
  )
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value, ?string $format = null): bool
  {
    if ($value instanceof DateTime)
    {
      return true;
    }

    if (is_array($value))
    {
      return call_user_func_array('checkdate', $value) !== false;
    }

    if (is_integer($value))
    {
      $value = date($format ?? $this->format, $value);
    }

    if (!is_string($value))
    {
      return false;
    }

    # Check if $value is a valid JSON string
    if (
      str_starts_with($value, '{') &&
      str_ends_with($value, '}')
    )
    {
      $jsonRule = new JsonValidationRule();

      if (!$jsonRule->passes($value))
      {
        return false;
      }

      $jsonDateObject = json_decode($value);

      if (
        !isset($jsonDateObject->month) ||
        !isset($jsonDateObject->day) ||
        !isset($jsonDateObject->year)
      )
      {
        return false;
      }

      return self::passes([$jsonDateObject->month, $jsonDateObject->day, $jsonDateObject->year]);
    }

    $date = DateTime::createFromFormat($format ?? $this->format, $value);

    if ($date === false)
    {
      return false;
    }

    $errors = $date->getLastErrors();

    return $errors === false;
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}