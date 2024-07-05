<?php
$file = fopen("reservasi.txt", "r");

echo "<h1>Data Reservasi</h1>";
while (!feof($file)) {
    $line = fgets($file);
    echo nl2br($line);
}
fclose($file);
