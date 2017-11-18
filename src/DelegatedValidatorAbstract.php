<?php

namespace Strict\Validator;

use Strict\Validator\ValidatorInterface;


/**
 * [ Abstract ] Invoke Delegated Validator Abstract
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
abstract class DelegatedValidatorAbstract implements ValidatorInterface
{

    final public function __invoke($value): bool
    {
        return $this->validate($value);
    }

}
