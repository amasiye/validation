<?php

namespace Assegai\Validation\Mock;

use Assegai\Validation\Attributes\IsEmail;
use stdClass;

class IncompleteValidMockDto extends stdClass
{
  #[IsEmail]
  public string $email = 'hello@example.com';

  public int $height = 183;
}