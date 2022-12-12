<?php

/**
 * This file is part of FPDI
 *
 * @package   owrasor\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.owrasor.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace owrasor\Fpdi\Tfpdf;

use owrasor\Fpdi\FpdfTplTrait;

/**
 * Class FpdfTpl
 *
 * We need to change some access levels and implement the setPageFormat() method to bring back compatibility to tFPDF.
 */
class FpdfTpl extends \tFPDF
{
    use FpdfTplTrait;
}
