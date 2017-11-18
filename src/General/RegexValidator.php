<?php

namespace Strict\Validator\General;

use Strict\Validator\General\StringValidator;


/**
 * [ Validator ] Regex Validator
 * 
 * This validator returns true if the value passes preg_match
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.0.0
 */
class RegexValidator extends StringValidator
{

    private $regex;

    public function __construct(string $regex)
    {
        $this->regex = $regex;
    }

    public function validate($value): bool
    {
        return parent::validate($value) && ( 1 === preg_match($this->regex, $value) );
    }

}
