<?php

namespace owrasor\Fpdi\unit\Tfpdf;

use owrasor\Fpdi\Tfpdf\Fpdi;
use owrasor\Fpdi\unit\FpdiTraitTest;

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
