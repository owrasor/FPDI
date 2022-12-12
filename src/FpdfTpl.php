<?php

/**
 * This file is part of FPDI
 *
 * @package   owrasor\Fpdi
 * @copyright Copyright (c) 2020 Setasign GmbH & Co. KG (https://www.owrasor.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace owrasor\Fpdi;

/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 */
class FpdfTpl extends \FPDF
{
    use FpdfTplTrait;
}
