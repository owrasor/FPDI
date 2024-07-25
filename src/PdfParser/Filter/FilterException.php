<?php

/**
 * This file is part of FPDI
 *
 * @package   owrasor\Fpdi
 * @copyright Copyright (c) 2023 Owrasor GmbH & Co. KG (https://www.owrasor.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace owrasor\Fpdi\PdfParser\Filter;

use owrasor\Fpdi\PdfParser\PdfParserException;

/**
 * Exception for filters
 */
class FilterException extends PdfParserException
{
    const UNSUPPORTED_FILTER = 0x0201;

    const NOT_IMPLEMENTED = 0x0202;
}
