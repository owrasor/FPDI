<?php

namespace owrasor\Fpdi\unit;

use owrasor\Fpdi\Fpdi;

require_once __DIR__ . '/FpdiTraitTest.php';

class FpdiTest extends FpdiTraitTest
{
    public function getInstance()
    {
        return new Fpdi();
    }
}
