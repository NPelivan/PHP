<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator</title>
</head>
<body>

<h2>Kalkulator</h2>

<form action="kalkulator.php" method="post">
  <input type="number" name="num1" placeholder="Unesite prvi broj" required>
  <select name="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select>
  <input type="number" name="num2" placeholder="Unesite drugi broj" required>
  <button type="submit">Izračunaj</button>
</form>

<?php
if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operator"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = '';

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Nije moguće dijeliti s nulom";
            }
            break;
        default:
            $result = "Nepoznata operacija";
    }

    echo "<p>Rezultat: $result</p>";
}
?>

</body>
</html>
