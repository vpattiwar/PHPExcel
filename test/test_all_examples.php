<?php

$testsFolder = realpath('/srv/PHPExcel/Tests');
$outputFolder = realpath('/srv/PHPExcel/Output');

$files = scandir($testsFolder);

foreach ($files as $file) {
    if (is_file($testsFolder . '/' . $file)) {
        $outfileName = basename($file , ".php");
        $input = $testsFolder . '/' . $file;

        $realFile = realpath($input);

        $realFile = file_get_contents($realFile);
        if (file_exists($realFile)) {
            $output = exec($realFile);

            $file = fopen('/srv/PHPExcel/Output/'.$file.'xlsx', 'w');
            fwrite($file, $output);
            fclose($file);
        }

        $outputFile = $outputFolder . '/' . $outfileName . '.xlsx';
        file_put_contents($outputFile, $output);
    }
}
