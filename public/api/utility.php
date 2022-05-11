<?php

class Utility {

    public static function envLoader($label) {
        $path = dirname(__DIR__,2);

        $current = file($path . "/.env");
        $values = array_values($current);
        for ($i = 0; $i < count($values); $i++) {
            if ( strpos($values[$i], $label) !== false) {
                return substr($values[$i], strlen($label) + 1, strlen($values[$i]) - 2);
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

}
