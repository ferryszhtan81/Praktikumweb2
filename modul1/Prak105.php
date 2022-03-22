<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK105.php</title>
</head>
<style>
th {
    width: 350px;
    height: 50px;
    background-color: #FF0000;
    font-size: 25px;
}
table, th, td {
    border: 2px solid;
}
</style>
<body>
<?php
$array = array(1=>"Samsung Galaxy S22",2=>"Samsung Galaxy S22+",3=>"Samsung Galaxy A03",4=>"Samsung Galaxy Xcover 5");
echo "<table>";
echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
foreach ($array as $data) {
    echo "<tr><td>". $data ."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
