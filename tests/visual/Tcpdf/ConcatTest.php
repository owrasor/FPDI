<?php

namespace owrasor\Fpdi\visual\Tcpdf;

use owrasor\Fpdi\PdfReader\PageBoundaries;
use owrasor\Fpdi\Tcpdf\Fpdi;

class ConcatTest extends \owrasor\Fpdi\visual\ConcatTest
{
    /**
     * If $inputData is an array the key 'tmpPath' is needed
     *
     * @param string|array $inputData
     * @param string $outputFile
     * @throws \owrasor\Fpdi\PdfReader\PdfReaderException
     */
    public function createPDF($inputData, $outputFile)
    {
        $pdf = new Fpdi();
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        if (!is_array($inputData['files'])) {
            $inputData['files'] = [$inputData['files']];
        }

        foreach ($inputData['files'] as $file) {
            $box = PageBoundaries::CROP_BOX;
            $groupXObject = true;
            if (is_array($file)) {
                extract($file);
            }

            try {
                $pageCount = $pdf->setSourceFile($file);
            } catch (\Exception $e) {
                echo $e->getMessage() . "\n";
                continue;
            }

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
                $pdf->AddPage();
                $tplIdx = $pdf->importPage($pageNo, $box, $groupXObject);
                $pdf->useTemplate($tplIdx, ['adjustPageSize' => true]);
            }
        }

        $pdf->Output($outputFile, 'F');
    }
}
