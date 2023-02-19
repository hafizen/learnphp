<?php
    function selamat_datang($nama){
        echo "Selamat datang, $nama";
        return true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php selamat_datang("Hapiss"); ?>
    </h1>
</body>
</html>


<!--
    parameter default pada php
    dengan cara memberi value jika tidak ada argumen yang dimasukkan.

    function selamat_datang($nama = "KURNIAWAN"){
        echo "Selamat datang, $nama";
        return true;

    -->