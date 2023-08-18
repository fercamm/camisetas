<?php
$json = "{\"cliente\": \"ññññ\"}";

$prety = json_encode(json_decode(($json)), JSON_PRETTY_PRINT);
echo $prety;
echo "<br><br><br>";
echo utf8_encode($prety);