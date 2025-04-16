<?php

$person =[
    "name" => "John Doe",
    "age" => 30,
    "email" => "s2OyY@example.com",
    "is_student" => false,
    "skills" => ["HTML", "CSS", "JavaScript", "PHP"]
];

$json_data = json_encode($person, JSON_PRETTY_PRINT);

echo "<h3>JSON Output:</h3><pre>$json_data</pre>";

$decoded = json_decode($json_data, true);

echo "<h3>Decoded Data:</h3>";
foreach($decoded as $key => $value) {
    echo "<p>$key: $value</p>";
}

$decoded["age"] = 31;
$decoded["is_student"] = true;
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $decoded["age"] . "<br>";
echo "Email: " . $person["email"] . "<br>";
echo "Is Student: " . ($decoded["is_student"] ? "Yes" : "No") . "<br>";
echo "Skills: " . implode(", ", $person["skills"]) . "<br>";

echo "<h3>Updated JSON:</h3><pre>" . json_encode($decoded, JSON_PRETTY_PRINT) . "</pre>";

?>