<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK104.php</title>
</head>
<style>
    table, th, td {
        border: 2px solid;
    }
</style>
<body>
<?php
$ListHP = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
echo "<table>";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
foreach ($ListHP as $DataHP){
    echo "<tr><td>".$DataHP."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
