<?php

namespace Strict\Validator\Tests;

use PHPUnit\Framework\TestCase;
use Strict\Validator\General\{
    AlwaysPassValidator,
    AlwaysFailValidator,
    //
    IntValidator,
    StringValidator,
    FloatValidator,
    BooleanValidator,
    ObjectValidator,
    ArrayValidator,
    CallableValidator,
    //
    InstanceOfValidator,
    SubclassOfValidator,
    RegexValidator
};


class TXValidatorTest extends TestCase
{

    public function testInvoke()
    {
        $p = new AlwaysPassValidator;
        $this->assertEquals($p->validate(null), $p(null));
    }

    public function testAlwaysPass()
    {
        $p = new AlwaysPassValidator;
        $this->assertTrue($p->validate(null));
    }

    public function testAlwaysFail()
    {
        $p = new AlwaysFailValidator;
        $this->assertFalse($p->validate(null));
    }

    public function testInt()
    {
        $p = new IntValidator;
        $this->assertFalse($p->validate('334'));
        $this->assertTrue($p->validate(334));
    }

    public function testString()
    {
        $p = new StringValidator;
        $this->assertTrue($p->validate('334'));
        $this->assertFalse($p->validate(334));
    }

    public function testFloat()
    {
        $p = new FloatValidator;
        $this->assertTrue($p->validate(33.4));
        $this->assertFalse($p->validate(33 - 4));
    }

    public function testBoolean()
    {
        $p = new BooleanValidator;
        $this->assertTrue($p->validate(true));
        $this->assertFalse($p->validate(null));
    }

    public function testObject()
    {
        $p = new ObjectValidator;
        $this->assertTrue($p->validate((object) []));
        $this->assertFalse($p->validate([]));
    }

    public function testArray()
    {
        $p = new ArrayValidator;
        $this->assertFalse($p->validate((object) []));
        $this->assertTrue($p->validate([]));
    }

    public function testCallable()
    {
        $p = new CallableValidator;
        $this->assertTrue($p->validate([$this, 'testCallable']));
        $this->assertFalse($p->validate(33 - 4));
    }

    public function testInstanceOf()
    {
        $p = new InstanceOfValidator(self::class);
        $this->assertTrue($p->validate($this));
        $this->assertFalse($p->validate($p));
    }

    public function testSubclassOf()
    {
        $p = new SubclassOfValidator(TestCase::class);
        $this->assertTrue($p->validate(self::class));
        $this->assertFalse($p->validate(SubclassOfValidator::class));
    }

    public function testRegex()
    {
        $p = new RegexValidator('/^[a-zA-Z]{3,5}$/');
        $this->assertTrue($p->validate('aaaa'));
        $this->assertFalse($p->validate(33.4));
    }

}
