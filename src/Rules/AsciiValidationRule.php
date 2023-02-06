<?php

namespace Assegai\Validation\Rules;

use Assegai\Validation\Interfaces\IValidationRule;

/**
 * Checks whether the given value only consists of ASCII characters.
 *
 * The 'AsciiValidationRule' might not provide a correct result as character encodings can overlap. ASCII is a subset
 * of many contemporary character encoding systems such as UTF-8, Windows-1252, and ISO 8859-1. This overlap makes it
 * difficult for tools dealing with internationalization to accurately detect the character encoding of a string.
 * Although an ASCII validation is likely to be accurate, it's possible that the string's author or creator intended
 * for it to be treated differently (such as UTF-8). To prevent these issues, it's recommended to:
 *
 * - Validate character encoding by checking a sizable sample of characters. The longer the string, the more diverse
 * the characters, and the more reliable the validation.
 *
 * - If you're working with HTML documents, look for HTML tags to identify the encoding used by the document creator,
 * who is often the only one who knows the document's encoding.
 *
 * - If the document is served through HTTP, use the charset in the HTTP Content-Type header to determine the
 * document's encoding.
 *
 * - Check for file signatures. UTF-8 uses a Byte Order Mark at the beginning of the file that identifies it as
 * UTF-8. A file with a Byte Order Mark would never validate as ASCII as the Byte Order Mark is made up of a 3-byte
 * UTF-8 encoded character that goes beyond 7-bit ASCII.
 *
 * @link https://github.com/assegaiphp/validation#available-rules
 */
class AsciiValidationRule implements IValidationRule
{
  public function __construct(protected string $errorMessage = 'Input must consist of only ASCII characters')
  {}

  /**
   * @inheritDoc
   */
  public function passes(mixed $value): bool
  {
    if (!is_string($value))
    {
      return false;
    }

    return !preg_match('/[\\x80-\\xff]+/' , $value);
  }

  /**
   * @inheritDoc
   */
  public function getErrorMessage(): string
  {
    return $this->errorMessage;
  }
}