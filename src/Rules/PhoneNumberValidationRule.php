<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberUtil;

class PhoneNumberValidationRule implements IValidationRule
{
  public function __construct(
    protected string $regionCode = 'US',
    protected string $errorMessage = 'Input should be a valid phone number',
  )
  {}

  /**
   * @inheritDoc
   * @throws NumberParseException
   */
  public function passes(mixed $value, ?string $regionCode = null): bool
  {
    if (!is_string($value) && !$value instanceof PhoneNumber)
    {
      return false;
    }

    $code = $regionCode ?? $this->regionCode;
    $phoneUtil = PhoneNumberUtil::getInstance();

    if (is_string($value))
    {
      $value = $phoneUtil->parse($value, $code);
    }

    return $phoneUtil->isValidNumberForRegion($value, $code);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}