<?php

class Utility {

    public static function envLoader($label) {
        $path = dirname(__DIR__,2);

        $current = file($path . "/.env");
        $values = array_values($current);
        for ($i = 0; $i < count($values); $i++) {
            if ( strpos($values[$i], $label) !== false) {
                return substr(substr($values[$i], strlen($label) + 1, strlen($values[$i]) - 2) , 0, strpos(substr($values[$i], strlen($label) + 1, strlen($values[$i]) - 2), "\n"));
            };
        }
    }

    public static function fileUnlink($file)
    {
        if (!unlink($file)) {
            echo ("$file cannot be deleted due to an error");
        }
        else {
            echo ("$file has been deleted");
        }
    }

    public static function httpPost($url, $data){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        echo $response;
    }

}
