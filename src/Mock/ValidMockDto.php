<?php

namespace Assegai\Validation\Mock;

use Assegai\Validation\Attributes\IsAlpha;
use Assegai\Validation\Attributes\IsAlphanumeric;
use Assegai\Validation\Attributes\IsArray;
use Assegai\Validation\Attributes\IsAscii;
use Assegai\Validation\Attributes\IsBetween;
use Assegai\Validation\Attributes\IsDate;
use Assegai\Validation\Attributes\IsDomain;
use Assegai\Validation\Attributes\IsEmail;
use Assegai\Validation\Attributes\IsEmpty;
use Assegai\Validation\Attributes\IsEqualTo;
use Assegai\Validation\Attributes\IsInt;
use Assegai\Validation\Attributes\IsNotEmpty;
use Assegai\Validation\Attributes\IsNumber;
use Assegai\Validation\Attributes\IsString;

class ValidMockDto extends \stdClass
{
  #[IsAlpha]
  public string $alpha = 'Assegai';

  #[IsAlphanumeric]
  public string $alphaNumeric = 'one2unbucklemyshoe34';

  #[IsArray]
  public array $arrayProp = [];

  #[IsAscii]
  public string $asciiProp = 'abcd1234!@#$';

  #[IsBetween(0, 100)]
  public int $between100 = 50;

  #[IsDate]
  public string $aValidDate = '1970-01-01T00:00:00+00:00';

  #[IsDate('l jS F Y')]
  public string $anotherValidDate = 'Monday 6th February 2023';

  #[IsDomain]
  public string $aValidDomain = 'assegaiphp.com';

  #[IsEmail]
  public string $aValidEmail = 'hello@example.com';

  #[IsEmpty]
  public ?string $anEmptyProp = null;

  #[IsEqualTo('assegaiphp')]
  public string $name = 'assegaiphp';

  #[IsEqualTo(28)]
  public int $daysInFebruary = 28;

  #[IsInt]
  public int|float $totalSpears = 5;

  #[IsNotEmpty]
  public string $notEmptyString = 'Shaka';

  #[IsNumber]
  public float|int $anotherNumber = 2.0;

  #[IsNumber]
  public float|int $aNumber = 1;

  #[IsString]
  public string $aString = 'The quick brown fox jumps over the lazy dog';
}