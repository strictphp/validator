<?php

namespace Strict\Validator\General;

use Strict\Validator\DelegatedValidatorAbstract;


/**
 * [ Validator ] Boolean Validator
 * 
 * This validator returns true if value is a type of boolean.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class BooleanValidator extends DelegatedValidatorAbstract
{

    public function validate($value): bool
    {
        return is_bool($value);
    }

}
