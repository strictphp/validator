<?php

namespace Strict\Validator\General;

use Strict\Validator\General\StringValidator;


/**
 * [ Validator ] Subclass Validator
 * 
 * This validator returns true if the value is an subclass of the class specified in the constructor.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class SubclassOfValidator extends StringValidator
{

    private $validator;

    public function __construct(string $className, bool $passSameClass = true)
    {
        $this->validator = $passSameClass ? (function($x) use ($className) {
                return $x === $className || is_subclass_of($x, $className, true);
            }) : (function($x) use ($className) {
                return is_subclass_of($x, $className, true);
            });
    }

    function validate($value): bool
    {
        return parent::validate($value) && ($this->validator)($value);
    }

}
