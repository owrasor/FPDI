<?php

namespace owrasor\Fpdi\visual\Tfpdf;

use owrasor\Fpdi\Tfpdf\FpdfTpl;

class FpdfTplTest extends \owrasor\Fpdi\visual\FpdfTplTest
{
    /**
     * Should return __FILE__
     *
     * @return string
     */
    public function getClassFile()
    {
        return __FILE__;
    }

    public function getInstance()
    {
        return new FpdfTpl('P', 'pt');
    }
}
