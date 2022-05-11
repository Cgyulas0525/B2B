<?php
require_once 'Database.php';

$path = dirname(__DIR__,2) . '/public/xml/';
$files = array_diff(preg_grep('~\.(xml)$~', scandir($path)), array('.', '..'));

foreach ($files as $file) {
    echo $file . "\n";

    $xmlDataString = file_get_contents($path . $file);

    $xmlDataString = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8', $xmlDataString);

    $xmlObject = simplexml_load_string($xmlDataString);

    $json = json_encode($xmlObject);
    $phpDataArray = json_decode($json, true);

    echo count($phpDataArray) . "\n";

    for ($j = 0;$j < count($phpDataArray); $j++) {
        $model = array_keys($phpDataArray)[$j];

        // Ellenőrző adatok feldolgozása
        if ($model === "PLugin") {
            echo "Plugin <br>";
        }

        if ($model != "PlugIn") {

            if (count($phpDataArray[$model]) > 0) {

                foreach ($phpDataArray[$model] as $index => $data) {

                    if (!is_array($data)) {

                        $keys = array_keys($phpDataArray[$model]);
                        $values = array_values($phpDataArray[$model]);

                    } else {

                        $keys = array_keys($data);
                        $values = array_values($data);

                    }

                    $smtpFieldEleje = 'INSERT INTO ' . $model . ' (';
                    $smtpValueEleje = 'VALUES (';
                    $smtpField = "";
                    $smtpValue = "";
                    for ( $i = 0; $i < count($keys); $i++ ){
                        $smtpField = $i == count($keys) - 1 ? $smtpField . $keys[$i] . ") " : $smtpField . $keys[$i] . ", ";
                        $smtpValue = $i == count($keys) - 1 ? $smtpValue . $values[$i] . ")" : $smtpValue . $values[$i] . ", ";
                    }
                    $smtp = $smtpFieldEleje . $smtpField . $smtpValueEleje . $smtpValue;
                    echo $smtp . "\n";
    //                DB::run($smtp);

                }
            }
        }
    }
    Utility::fileUnlink($path.$file);
}


