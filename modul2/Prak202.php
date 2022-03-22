<!DOCTYPE html>
<html lang="id">
<head>
    <title>Prak202.php</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
$namaSalah = $nimSalah = $kelaminSalah = "";
$nama = $nim = $kelamin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $namaSalah = "nama tidak boleh kosong";
    } else {
        $nama = test_input($_POST["nama"]);
    }

    if (empty($_POST["nim"])) {
        $nimSalah = "nim tidak boleh kosong";
    } else {
        $nim = test_input($_POST["nim"]);
    }

    if (empty($_POST["kelamin"])) {
        $kelaminSalah = "jenis kelamin tidak boleh kosong";
    } else {
        $kelamin = test_input($_POST["kelamin"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <label><input type="text" name="nama" value="<?php echo $nama;?>"></label>
    <span class="error">* <?php echo $namaSalah;?></span>
    <br>
    Nim: <label><input type="text" name="nim" value="<?php echo $nim;?>"></label>
    <span class="error">* <?php echo $nimSalah;?></span>
    <br>
    Jenis Kelamin: <span class="error">* <?php echo $kelaminSalah;?></span><br>
    <label><input type="radio" name="kelamin" <?php if (isset($kelamin) && $kelamin=="Laki-Laki") echo "checked";?> value="Laki-Laki"></label>Laki-Laki<br>
    <label><input type="radio" name="kelamin" <?php if (isset($kelamin) && $kelamin=="Perempuan") echo "checked";?> value="Perempuan"></label>Perempuan
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Output:</h2>";
echo $nama;
echo "<br>";
echo $nim;
echo "<br>";
echo $kelamin;
?>
</body>
</html>
