<?php

$name = $_POST["name"];
$email = $_POST["email"];
$jazz = $_POST["jazz"];
$elec = $_POST["elec"];
$lofi = $_POST["lofi"];
$metal = $_POST["metal"];
$rock = $_POST["rock"];
$write_data = "{$name},{$email},{$jazz},{$elec},{$lofi},{$metal},{$rock}\n";

$file = fopen('data/storage.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:index.php");