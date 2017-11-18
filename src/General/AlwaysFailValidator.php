<?php

namespace Strict\Validator\General;

use Strict\Validator\DelegatedValidatorAbstract;


/**
 * [ Validator ] Always Fail Validator
 * 
 * This validator always returns false.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class AlwaysFailValidator extends DelegatedValidatorAbstract
{

    public function validate($value): bool
    {
        return false;
    }

}
