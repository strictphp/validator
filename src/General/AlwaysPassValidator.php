<?php

namespace Strict\Validator\General;

use Strict\Validator\DelegatedValidatorAbstract;


/**
 * [ Validator ] Always Pass Validator
 * 
 * This validator always returns true.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class AlwaysPassValidator extends DelegatedValidatorAbstract
{

    public function validate($value): bool
    {
        return true;
    }

}
