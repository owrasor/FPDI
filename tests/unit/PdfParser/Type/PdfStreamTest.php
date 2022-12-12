<?php

namespace owrasor\Fpdi\unit\PdfParser\Type;

use PHPUnit\Framework\TestCase;
use owrasor\Fpdi\PdfParser\Type\PdfDictionary;
use owrasor\Fpdi\PdfParser\Type\PdfNumeric;
use owrasor\Fpdi\PdfParser\Type\PdfStream;
use owrasor\Fpdi\PdfParser\Type\PdfString;
use owrasor\Fpdi\PdfParser\Type\PdfTypeException;

class PdfStreamTest extends TestCase
{
    public function testCreate()
    {
        $dict = PdfDictionary::create(['A' => PdfNumeric::create(123)]);
        $v = PdfStream::create($dict, 'stream conent');
        $this->assertInstanceOf(PdfStream::class, $v);
        $this->assertSame('stream conent', $v->getStream());
        $this->assertSame($dict, $v->value);
    }

    public function testEnsureWithInvlaidArgument1()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfStream::ensure('test');
    }

    public function testEnsureWithInvlaidArgument2()
    {
        $this->expectException(PdfTypeException::class);
        $this->expectExceptionCode(PdfTypeException::INVALID_DATA_TYPE);
        PdfStream::ensure(PdfString::create('test'));
    }

    public function testEnsure()
    {
        $a = PdfStream::create(PdfDictionary::create([]), '');
        $b = PdfStream::ensure($a);
        $this->assertSame($a, $b);
    }
}