
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Desimal</label> <br>
            <input name="desimal" type="text" placeholder="Desimal">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
</body>

<?php # membuka tag PHP

$desimal = @$_GET['desimal'];
$hex = dechex($desimal);
$bin = decbin($desimal);
$oct = decoct($desimal);
# di sini nanti kita akan tampilkan variabel $nama dan $alamat

# jangan lupa tutup tag PHP

if ($desimal) {
    echo "<strong>Desimal:</strong> {$desimal} <br>";
}
if ($desimal) {
    echo "<strong>Hexa:</strong> {$hex} <br>";
}

if ($desimal) {
    echo "<strong>Binary:</strong> {$bin} <br>";
}


?>

</html>