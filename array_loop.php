<?php
$aplikasi = array(
    '$aplikasi[1]' => 'gtAkademik',
    '$aplikasi[2]' => 'gtFinansi',
    '$aplikasi[3]' => 'gtPerizinan',
    '$aplikasi[4]' => 'eCampuz',
    '$aplikasi[5]' => 'eOviz'
);
$arrayLength = count($aplikasi);

$i = 0;
while ($i < $arrayLength) {
    foreach ($aplikasi as $key => $value) {
        echo "$key = $value <br>";
    }
    break;
}
