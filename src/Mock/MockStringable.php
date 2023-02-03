<?php

namespace Assegai\Validation\Mock;

use Stringable;

class MockStringable implements Stringable
{
  public function __toString(): string
  {
    return 'This is a mock class';
  }
}