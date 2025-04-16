<?php
$fruits = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
$json_data = json_encode($fruits, JSON_PRETTY_PRINT);

echo "<h3>JSON Output:</h3><pre>$json_data</pre>";

$decoded = json_decode($json_data, true);

echo "<h3>Decoded Data:</h3>";
foreach($decoded as $key => $value) {
    echo "<p>$key: $value</p>";
}


?>
