<div align="center" style="padding-bottom: 48px">
    <a href="https://assegaiphp.com/" target="blank"><img src="https://assegaiphp.com/images/logos/logo-cropped.png" width="200" alt="Assegai Logo"></a>
</div>

<p align="center">A progressive <a href="https://php.net">PHP</a> framework for building effecient and scalable server-side applications.</p>

# AssegaiPHP Validation

Welcome to the AssegaiPHP validation package! This package is designed to provide a simple and easy-to-use solution for validating data in your AssegaiPHP projects.

## Installation
To install this package, run the following command in your project's root directory:

```bash
composer require assegaiphp/validation
```

## Basic Usage

To use this package, simply import the Assegai\Validation\Validator class and create a new instance. You can then use the validate() method to check if a value or array of values meet the specified criteria.

```php
use Assegai\Validation\Validator;

$validator = new Validator();
$isValid = $validator->validate($value, 'required|email');
```

The second argument to the validate() method is a string containing the validation rules to apply, separated by the | character. In the example above, the required and email rules are applied.

## Available Rules

This package comes with a number of built-in validation rules, including:

- `alpha`: value must contain only alphabetic characters
- `alnum`: value must contain only alphanumeric characters
- `between:n,m`: value must be between n and m (inclusive)
- `domain`: value must be a valid domain name
- `email`: value must be a valid email address
- `equalTo:n`: value must be equal to n
- `float`: value must be a floating point number
- `inlist:l`: value is in a specific list of allowed values
- `integer`: value must be an integer
- `maxLength:n`: value must be no more than n characters long
- `max:n`: value does not exceed a maximum value, n
- `minLength:n`: value must be at least n characters long
- `min:n`: value is at least a certain value, n
- `notEqualTo:n`: value must not be equal to n
- `notinlist:l`: value is not in a specific list of disallowed values
- `numeric`: value must be a number
- `regex:n`: value must match the given regex pattern n
- `required`: value must be present
- `string`: value must be a string
- `url`: value must be a valid url

You can also create custom validation rules by extending the Assegai\Validation\Rule class and implementing the validate() method.

## Error Handling

If the validate() method returns false, you can use the getErrors() method to retrieve an array of error messages.

```php
if (!$isValid)
{
  $errors = $validator->getErrors();
  // handle errors
}
```

## Further Reading

For more information on how to use this package, please see the full [documentation](https://assegaiphp.com/gudie/techniques/validation). Thank you for using the AssegaiPHP.