<?php

namespace Strict\Validator\Operator;

use Strict\Validator\DelegatedValidatorAbstract;
use Strict\Validator\ValidatorInterface;


/**
 * [ Validator ] Logical Or
 * 
 * This validator combines multiple validators with logical or operator.
 *
 * @author 4kizuki <akizuki.c10.l65@gmail.com>
 * @copyright 2017 4kizuki. All Rights Reserved.
 * @package strictphp/validator
 * @since 1.1.0
 */
class LogicalOr extends DelegatedValidatorAbstract
{

    /** @var ValidatorInterface[] */
    private $validators;

    public function __construct(ValidatorInterface ...$vi)
    {
        $this->validators = $vi;
    }

    public function validate($value): bool
    {
        foreach ($this->validators as $validator) {
            if ($validator->validate($value)) {
                return true;
            }
        }
        return false;
    }

}
