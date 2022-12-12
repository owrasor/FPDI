<?php

namespace owrasor\Fpdi\unit\PdfReader;

use PHPUnit\Framework\TestCase;
use owrasor\Fpdi\PdfReader\PageBoundaries;

class PageBoundariesTest extends TestCase
{
    public function isValidNameProvider()
    {
        return [
            ['MediaBox', true],
            ['CropBox', true],
            ['ArtBox', true],
            ['TrimBox', true],
            ['BleedBox', true],
            ['FontBox', false],
            ['', false]
        ];
    }

    /**
     * @param $name
     * @param $expectedResult
     * @dataProvider isValidNameProvider
     */
    public function testIsValidName($name, $expectedResult)
    {
        $this->assertEquals($expectedResult, PageBoundaries::isValidName($name));
    }
}