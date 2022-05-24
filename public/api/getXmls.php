<?php

require_once 'Database.php';
require_once 'Utility.php';

class XML {
    public static $path = NULL;

    public static function __constructor()
    {
        self::$path = dirname(__DIR__,2) . '/public/xml/';
    }

    public static function fileLoader($file)
    {
        $xmlDataString = file_get_contents(self::$path . $file);
        $xmlDataString = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8', $xmlDataString);
        $xmlObject = simplexml_load_string($xmlDataString);
        $json = json_encode($xmlObject);
        return json_decode($json, true);
    }

    public static function makeInsert($model, $keys, $values)
    {
        $smtpFieldEleje = 'INSERT INTO ' . $model . ' (';
        $smtpValueEleje = 'VALUES (';
        $smtpField = "";
        $smtpValue = "";
        for ( $i = 0; $i < count($keys); $i++ ){
            $smtpField = $i == count($keys) - 1 ? $smtpField . $keys[$i] . ") " : $smtpField . $keys[$i] . ", ";
            $smtpValue = $i == count($keys) - 1 ? $smtpValue . $values[$i] . ")" : $smtpValue . $values[$i] . ", ";
        }
        return $smtpFieldEleje . $smtpField . $smtpValueEleje . $smtpValue;
    }

    public static function makeUpdate($model, $keys, $values, $id)
    {
        $smtpFieldEleje = "UPDATE " . $model . " SET ";
        $smtpWhere = "WHERE Id = '" .$id. "'" ;
        $smtpValue = "";
        for ( $i = 0; $i < count($keys); $i++ ){
            $smtpValue = $i == count($keys) - 1 ? $smtpValue . " " . $keys[$i] . "=" . $values[$i] . " " : $smtpValue . " " . $keys[$i] . "=" . $values[$i] . ", ";
        }
        return $smtpFieldEleje . $smtpValue . $smtpWhere;
    }

    public static function xmlLoader()
    {
        $files = array_diff(preg_grep('~\.(xml)$~', scandir(self::$path)), array('.', '..'));
        foreach ($files as $file) {
            $phpDataArray = self::fileLoader($file);
            for ($j = 0;$j < count($phpDataArray); $j++) {
                $model = array_keys($phpDataArray)[$j];
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
                            $sql = "SELECT Count(*) as db FROM " . $model . " WHERE Id = '" . $values[array_search('Id', $keys)] . "'";
                            $smtp = DB::run($sql);
                            if ($smtp) {
                                $record = $smtp->fetchAll();
                                if (count($record) > 0) {
                                    foreach ($record as $row) {
                                        if ( intval($row['db']) === 1 ) {
                                            $smtp = self::makeUpdate($model, $keys, $values, $values[array_search('Id', $keys)]);
                                        } else {
                                            $smtp = self::makeInsert($model, $keys, $values);
                                        }
                                    }
                                }
                            } else {
                                return $sql . ' hibával tért vissza!';
                            }
                           DB::run($smtp);
                        }
                    }
                }
            }
            Utility::fileUnlink(self::$path.$file);
        }
        Utility::httpPost(self::$path, "OK");
    }
}



