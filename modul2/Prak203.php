<!DOCTYPE html>
<html lang="id">
<head>
    <title>Prak203.php</title>
</head>
<body>
<form name="tempConvert" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <table>
        <tr>
            <td>Enter value to convert</td>
            <td><label for="valueConvert"></label><input type="text" name="valueConvert" id="valueConvert" size="15"></td>
        </tr>

        <tr>
            <td>Convert to:</td>
            <td><label for="convertType"></label><select name="convertType" id="convertType" size="1">
                    <option disabled> Select a measurement type</option>
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>
            <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
        </tr>
    </table>
</form>
<?php
function tempConvert($NilaiSuhu, $SuhuJenis)
{
    if ($SuhuJenis == "celsius"){
        $Konversi = $NilaiSuhu;
    } else if ($SuhuJenis == "fahrenheit"){
        $Konversi = ((9/5)*$NilaiSuhu)+(32);
    } else if ($SuhuJenis == "reaumur"){
        $Konversi = (4/5*$NilaiSuhu);
    } else if ($SuhuJenis == "kelvin") {
        $Konversi = (273+$NilaiSuhu);
    }
    return $Konversi;
}

$NilaiSuhu= $_POST['valueConvert'];
$SuhuJenis = $_POST['SuhuJenis'];
$Konversi = tempConvert($NilaiSuhu, $SuhuJenis);
echo "<h2>Hasil Konversi: $Konversi</h2>";
?>
</body>
</html>
