# Validator
Validator Interface and General Validators.

# Usage

Implement `ValidatorInterface`. `validate` and `__invoke` must return true if `$value` is valid and false if invalid.

```php
namespace Strict\Validator;

interface ValidatorInterface
{

    public function __invoke($value): bool;
    public function validate($value): bool;

}
```

You can use `DelegatedValidatorAbstract` instead.

```php
namespace Strict\Validator;

use Strict\Validator\ValidatorInterface;


abstract class DelegatedValidatorAbstract implements ValidatorInterface
{

    final public function __invoke($value): bool
    {
        return $this->validate($value);
    }

}

```

# General Validators
This library provides general validators.

- `AlwaysPassValidator`
- `AlwaysFailValidator`
- `IntValidator`
- `StringValidator`
- `FloatValidator`
- `BooleanValidator`
- `CallableValidator`
- `ObjectValidator`
- `ArrayValidator`
- `RegexValidator`
- `InstanceOfValidator`
- `SubclassOfValidator`

This library also provides basic logical operations.

- `LogicalAnd`
- `LogicalOr`