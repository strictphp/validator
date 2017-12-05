<?php

namespace Strict\Validator\General;

use Strict\Validator\DelegatedValidatorAbstract;


/**
 * [ Validator ] Null Validator
 * 
 * This validator returns true if value is null.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class NullValidator extends DelegatedValidatorAbstract
{

    public function validate($value): bool
    {
        return is_null($value);
    }

}
