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
use stdClass;

class InvalidMockDto extends stdClass
{
  #[IsAlpha]
  public int $notAlpha = 1;

  #[IsAlphanumeric]
  public bool $notAlphaNumeric = false;

  #[IsArray]
  public int $nonArrayProp = 0;

  #[IsAscii]
  public string $nonAsciiProp = '😂';

  #[IsBetween(0, 100)]
  public int $outside100 = 101;

  #[IsDate]
  public string $anInvalidDate = '19700000-01-01T00:00:00+00:00';

  #[IsDate('l jS F Y')]
  public string $anotherInvalidDate = 'Monday 36th February 2023';

  #[IsDomain]
  public string $anInvalidDomain = 'www.assegaiphp';

  #[IsEmail]
  public string $anInvalidEmail = 'hello_';

  #[IsEmpty]
  public ?string $aNonEmptyProp = 'Bwanji';

  #[IsEqualTo('assegaiphp')]
  public string $name = 'notassegaiphp';

  #[IsEqualTo(28)]
  public int $daysInFebruary = 30;

  #[IsInt]
  public int|float $totalSpears = 5.0;

  #[IsNotEmpty]
  public string $anEmptyString = '';

  #[IsNumber]
  public string $notAnotherNumber = 'how we do';

  #[IsNumber]
  public bool $notANumber = true;

  #[IsString]
  public array $notAString = [];
}