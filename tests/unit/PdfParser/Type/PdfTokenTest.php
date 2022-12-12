<?php

namespace owrasor\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use owrasor\Fpdi\PdfParser\Type\PdfName;
use owrasor\Fpdi\PdfParser\Type\PdfString;
use owrasor\Fpdi\PdfParser\Type\PdfToken;
use owrasor\Fpdi\PdfParser\Type\PdfTypeException;

class PdfTokenTest extends TestCase
{
    public function testCreate()
    {
        $v = PdfToken::create("Test");
        $this->assertInstanceOf(PdfToken::class, $v);
        $this->assertSame("Test", $v->value);
    }

    public function testEnsureWithInvlaidArgument1()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfToken::ensure('test');
    }

    public function testEnsureWithInvlaidArgument2()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfToken::ensure(PdfName::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfToken::create('AToken');
        $b = PdfToken::ensure($a);
        $this->assertSame($a, $b);
    }
}