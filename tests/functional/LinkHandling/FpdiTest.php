<?php

namespace owrasor\Fpdi\functional\LinkHandling;

use owrasor\Fpdi\Fpdi;

class FpdiTest extends \owrasor\Fpdi\functional\LinkHandling\AbstractTest
{
    protected function getInstance($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        return new Fpdi($orientation, $unit, $size);
    }
}
