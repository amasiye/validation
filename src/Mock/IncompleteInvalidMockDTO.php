<?php

namespace Assegai\Validation\Mock;

use Assegai\Validation\Attributes\IsArray;
use stdClass;

class IncompleteInvalidMockDTO extends stdClass
{
  #[IsArray]
  public int $notArray = 0;

  public string $notAttributed = 'assegaiphp';
}