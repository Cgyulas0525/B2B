<?php

function mentesTombbe($mibe, $mi)
{
for ($i = 0; $i < count($mi); $i++)
{
array_push($mibe, $mi[$i]);
}
return $mibe;
}

function vmi()
{
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=b2b', 'root', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$fileName = 'C:\wamp64\www\Laravel\B2B\App\Models\Customer.php';

$current = file($fileName);
$keys = array_keys($current);
$values = array_values($current);

$fillableStart = NULL;
$fillableEnd = NULL;
$castsStart = NULL;
$castsEnd = NULL;
$rulesStart = NULL;
$rulesEnd = NULL;

$fillableArray = [];
$castsArray = [];
$rulesArray = [];
$elejeArray = [];
$kozepArray = [];
$kozep2Array = [];
$vegeArray = [];

$mentesArray = [];

for ($i = 0; $i < count($values); $i++) {
if (strpos($values[$i], "fillable") > 0) {
$fillableStart = is_null($fillableStart) ? $i : $fillableStart;
}
if ((strpos($values[$i], "];") > 0) && (strlen(trim($values[$i])) === 2)) {
if (is_null($fillableEnd)) {
$fillableEnd = $i;
} else {
if (($i > $fillableEnd) && is_null($castsEnd)) {
$castsEnd = $i;
} else {
if (($i > $castsEnd) && is_null($rulesEnd)) {
$rulesEnd = $i;
}
}
}
}
if (strpos($values[$i], "casts") > 0) {
$castsStart = is_null($castsStart) ? $i : $castsStart;
}
if (strpos($values[$i], "rules =") > 0) {
$rulesStart = is_null($rulesStart) ? $i : $rulesStart;
}
}
for ($i = 0; $i <= count($values); $i++) {
if ($i <= $fillableStart) {
array_push($elejeArray, $values[$i]);
} elseif (($i > $fillableStart) && ($i < $fillableEnd)) {
array_push($fillableArray, $values[$i]);
} elseif (($i >= $fillableEnd) && ($i <= $castsStart)) {
array_push($kozepArray, $values[$i]);
} elseif (($i >= $castsStart) && ($i < $castsEnd)) {
array_push($castsArray, $values[$i]);
} elseif (($i >= $castsEnd) && ($i <= $rulesStart)) {
array_push($kozep2Array, $values[$i]);
} elseif (($i >= $rulesStart) && ($i < $rulesEnd)) {
array_push($rulesArray, $values[$i]);
} elseif (($i >= $rulesEnd) && ($i < count($values))) {
array_push($vegeArray, $values[$i]);
}
}

$mezok = [["'Valami'", "decimal", "4"], ["'MasValami'", "string", '100']];
foreach ($mezok as $mezo) {
$mezoEOL = $mezo[0] . "\n";
$ujMezoFillable = str_repeat(' ', strpos($fillableArray[0], "'")) . $mezoEOL;
$fillableArray[count($fillableArray) - 1] = substr($fillableArray[count($fillableArray) - 1], 0, iconv_strpos($fillableArray[count($fillableArray) - 1], "\n", 0)) . ',' . "\n";
array_push($fillableArray, $ujMezoFillable);
$ujMezoCasts = str_repeat(' ', strpos($castsArray[0], "'")) . $mezo[0] . ' => ' . "'" . $mezo[1] . (!is_null($mezo[2]) ? ':' . $mezo[2] : null) . "'" . "\n";
$castsArray[count($castsArray) - 1] = substr($castsArray[count($castsArray) - 1], 0, iconv_strpos($castsArray[count($castsArray) - 1], "\n", 0)) . ',' . "\n";
array_push($castsArray, $ujMezoCasts);

$fieldName = substr($mezo[0], 1, (strlen($mezo[0]) - 2));
if ($mezo[1] === "string") {
$type = 'varchar(' . $mezo[2] . ')';
} elseif ($mezo[1] === "decimal") {
$type = 'decimal(18,' . $mezo[2] . ')';
}

$utasitas = 'ALTER TABLE Customer ADD';
$mit = $utasitas . " " . $fieldName . " " . $type;
$statement = $pdo->prepare($mit);
$statement->execute();

}

$mentesArray = mentesTombbe($mentesArray, $elejeArray);
$mentesArray = mentesTombbe($mentesArray, $fillableArray);
$mentesArray = mentesTombbe($mentesArray, $kozepArray);
$mentesArray = mentesTombbe($mentesArray, $castsArray);
$mentesArray = mentesTombbe($mentesArray, $kozep2Array);
$mentesArray = mentesTombbe($mentesArray, $rulesArray);
$mentesArray = mentesTombbe($mentesArray, $vegeArray);

for ($i = 0; $i < count($mentesArray); $i++) {
echo $mentesArray[$i];
}

$fp = 'C:\wamp64\www\Laravel\B2B\App\Models\Customer.txt';

file_put_contents($fp, $mentesArray);
}

function masvmi() {

$path = env('XML_DIR');
$url = env('APP_URL');

$files = array_diff(scandir($path), array('.', '..'));

foreach ($files as $file) {

$xmlDataString = file_get_contents($path . "//" . $file);

$xmlDataString = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8', $xmlDataString);

$xmlObject = simplexml_load_string($xmlDataString);

$json = json_encode($xmlObject);
$phpDataArray = json_decode($json, true);

for ($j = 0;$j < count($phpDataArray); $j++) {
$model = array_keys($phpDataArray)[$j];


// ellenőrző adatok feldolgozás
if ($model === "PlugIn") {
echo "PlugIn<br>";
}

// táblák betöltés
if ($model != "PlugIn") {

if (count($phpDataArray[$model]) > 0) {

// a Lead tábla a mySQL adatbázisban  Leed!!!
$modelName = ('\App' . '\\Models' . '\\' . ($model === "Lead" ? 'Leed' : $model));

$fileName = 'C:\wamp64\www\Laravel\B2B'. $modelName . '.php';

//                $current = file($fileName);
//                $keys = array_keys($current);
//                $values = array_values($current);
//                for ($i = 0; $i < count($values); $i++)
//                {
//                    if (strpos($values[$i],  "fillable") > 0 )
//                    {
//                        echo $i;
//                    }
//                }
if (file_exists($fileName)) {

$modelItem = new $modelName;


foreach ($phpDataArray[$model] as $index => $data) {

if (!is_array($data)) {

$keys = array_keys($phpDataArray[$model]);
$values = array_values($phpDataArray[$model]);

} else {

$keys = array_keys($data);
$values = array_values($data);

}

for ($i = 0; $i < count($keys); $i++) {

if (!empty($values[$i])) {
$modelItem[$keys[$i]] = $values[$i];
} else {
$modelItem[$keys[$i]] = 0;
}
}

$dataArray = $modelItem->getAttributes();

$modelItem = $modelName::find($dataArray['Id']);

if (!empty($modelItem)) {
$modelItem->update($dataArray);
} else {
$modelName::insert($dataArray);
}

$modelItem = new $modelName;
}
}

if (!file_exists($fileName)) {
echo 'Nincs ilyen model' . $fileName . '<br>';
}
}
}
}


}

}
