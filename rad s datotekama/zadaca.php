<?php
// Read the JSON file
$jsonData = file_get_contents('polaznici.json');
$polaznici = json_decode($jsonData, true);

if ($polaznici === null) {
    echo "Error decoding JSON data.";
    exit;
}

// HTML Table
echo "<table border='1'>";
echo "<tr><th>Ime</th><th>Prezime</th><th>Godine</th><th>Email</th><th>Telefon</th></tr>";

foreach ($polaznici as $polaznik) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($polaznik['Ime']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Prezime']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Godine']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Email']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Telefon']) . "</td>";
    echo "</tr>";
}

echo "</table>";

function readJsonData($filename) {
    $jsonData = file_get_contents($filename);
    return json_decode($jsonData, true);
}

// Function to write JSON data
function writeJsonData($filename, $data) {
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filename, $jsonData);
}

// Read the JSON file
$filename = 'polaznici.json';
$polaznici = readJsonData($filename);

if ($polaznici === null) {
    echo "Error decoding JSON data.";
    exit;
}

// New participant data
$newPolaznik = [
    "Ime" => "Mirko",
    "Prezime" => "Mirkan",
    "Godine" => 45,
    "Email" => "mirko.mirkan@gmail.com",
    "Telefon" => "38599555666"
];

// Add new participant to the array
$polaznici[] = $newPolaznik;

// Write updated data back to the JSON file
writeJsonData($filename, $polaznici);

// HTML Table
echo "<table border='1'>";
echo "<tr><th>Ime</th><th>Prezime</th><th>Godine</th><th>Email</th><th>Telefon</th></tr>";

foreach ($polaznici as $polaznik) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($polaznik['Ime']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Prezime']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Godine']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Email']) . "</td>";
    echo "<td>" . htmlspecialchars($polaznik['Telefon']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>