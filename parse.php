<?php
$file = file('path/of/file.csv');
$lines = explode(PHP_EOL, $file);
$array = array();
foreach ($lines as $line) {
  $array[] = str_getcsv($line);
}

if (!$mysqli = mysgli_connect($localhost, $login, $password, $table)) die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
foreach ($array as $row) {
  if (!$result = mysqli_query($mysqli, "INSERT INTO catalog(id, name, value1, value2, value3) VALUES ('$row[0]', '$row[1]', '$row[2]', '$row[3]', '$row[4]')")) echo "Ошибка (" . mysqli_connect_error() . ") " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
