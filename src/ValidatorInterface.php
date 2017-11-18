<?php

namespace Strict\Validator;


/**
 * [ Interface ] Validator Interface
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
interface ValidatorInterface
{

    public function __invoke($value): bool;

    public function validate($value): bool;

}
