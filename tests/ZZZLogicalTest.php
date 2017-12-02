<?php

namespace Strict\Validator\Tests;

use Strict\Validator\Operator\LogicalAnd;
use Strict\Validator\Operator\LogicalOr;
use Strict\Validator\General\AlwaysPassValidator;
use Strict\Validator\General\AlwaysFailValidator;
use PHPUnit\Framework\TestCase;


class ZZZLogicalTest extends TestCase
{

    public function testAnd()
    {
        $this->assertTrue((new LogicalAnd(new AlwaysPassValidator))->validate(1));
        $this->assertFalse((new LogicalAnd(new AlwaysFailValidator))->validate(1));
        $this->assertFalse((new LogicalAnd(new AlwaysPassValidator, new AlwaysFailValidator))->validate(1));
    }
    public function testOr()
    {
        $this->assertTrue((new LogicalOr(new AlwaysPassValidator))->validate(1));
        $this->assertFalse((new LogicalOr(new AlwaysFailValidator))->validate(1));
        $this->assertTrue((new LogicalOr(new AlwaysPassValidator, new AlwaysFailValidator))->validate(1));
    }

}
