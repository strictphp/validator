<?php

namespace Strict\Validator\General;

use Strict\Validator\General\ObjectValidator;


/**
 * [ Validator ] Instance Validator
 * 
 * This validator returns true if the value is an instance of the class specified in the constructor.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class InstanceOfValidator extends ObjectValidator
{

    private $className;

    public function __construct(string $className)
    {
        $this->className = $className;
    }

    public function validate($value): bool
    {
        return parent::validate($value) && ($value instanceof $this->className);
    }

}
