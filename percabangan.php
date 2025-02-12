<?php 
$umur =50;

 if ($umur == 0) {
    echo "usia bayi";
} elseif ($umur >=1 && $umur <=12) {
    echo "usia anak anak";
}elseif ($umur >=1 && $umur <=12) {
    echo "usia anak anak";
}elseif ($umur >=13 && $umur <=17) {
    echo "usia Remaja";
}elseif ($umur >=18 && $umur <=50) {
    echo "usia Dewasa";
}elseif ($umur >=50) {
    echo "Bau tanah";
}else {
    echo "tamat";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input Pengguna</h1>
    <form action="/submit" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>

</body>
</html>
