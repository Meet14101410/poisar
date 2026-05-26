<?php
$poisar = [
    "name" => "Poisar",
    "parent" => "Kandivali",
    "district" => "Mumbai Suburban",
    "transit_mode" => ["Metro Line 2A", "BEST Bus Service"],
    "pincode" => 400067
];

echo "<h2>Directory: " . $poisar['name'] . "</h2>";
echo "<ul>";
echo "<li><strong>Region:</strong> " . $poisar['parent'] . "</li>";
echo "<li><strong>Connectivity:</strong> " . implode(" & ", $poisar['transit_mode']) . "</li>";
echo "<li><strong>Postal Code:</strong> " . $poisar['pincode'] . "</li>";
echo "</ul>";
?>
