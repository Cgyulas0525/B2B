<?php

require_once "Database.php";

$sql = "SELECT * FROM users";
$smtp = DB::run($sql);

if ($smtp) {
    $record = $smtp->fetchAll();
    if (count($record) > 0) {
        $array = [];
        foreach ($record as $row) {
            echo $row['id'] . " ". $row['name'] . "\n";
        }
    }
} else {
    echo "Nincs új kosár!";
}
