<?php

namespace owrasor\Fpdi\unit\Tcpdf;

use owrasor\Fpdi\Tcpdf\Fpdi;
use owrasor\Fpdi\unit\FpdiTraitTest;

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
