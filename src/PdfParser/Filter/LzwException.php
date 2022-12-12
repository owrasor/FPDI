<?php

/**
 * This file is part of FPDI
 *
 * @package   owrasor\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.owrasor.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace owrasor\Fpdi\PdfParser\Filter;

/**
 * Exception for LZW filter class
 */
class LzwException extends FilterException
{
    /**
     * @var integer
     */
    const LZW_FLAVOUR_NOT_SUPPORTED = 0x0501;
}
