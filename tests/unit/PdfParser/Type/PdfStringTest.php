<?php

namespace owrasor\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use owrasor\Fpdi\PdfParser\Type\PdfName;
use owrasor\Fpdi\PdfParser\Type\PdfString;
use owrasor\Fpdi\PdfParser\Type\PdfTypeException;

class PdfStringTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfString::create("Test");
        $this->assertInstanceOf(PdfString::class, $v);
        $this->assertSame("Test", $v->value);
    }

    public function testEnsureWithInvlaidArgument1()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfString::ensure('test');
    }

    public function testEnsureWithInvlaidArgument2()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfString::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfString::create('Testing is cool');
        $b = PdfString::ensure($a);
        $this->assertSame($a, $b);
    }
}