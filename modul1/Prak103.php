<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK103.php</title>
</head>
<body>
<?php
$celsius = 37.841;
$fahrenheit = (9/5) * $celsius + 32;
$reaumur = (4/5) * $celsius;
$kelvin = 273 + $celsius;
echo "Celsius = ".$celsius."<br />";
echo "<br />Fahrenheit = ".$fahrenheit;
echo "<br />Reamur = ".$reaumur;
echo "<br />Kelvin = ".$kelvin;
?>
</body>
</html>
