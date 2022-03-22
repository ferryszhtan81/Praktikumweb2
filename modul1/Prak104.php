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
$array = array("Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5");
echo "<table>";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
foreach ($array as $data){
    echo "<tr><td>".$data."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
