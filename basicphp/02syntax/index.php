<!--
    START APACHE untuk dapat menggunakan fitur PHP pada XAMPP environment.

    localhost/{path/path} pada folder didalam xampp/htdocs 
-->

<!--TAG PHP : kode php ditulis didalam tag. -->
<?php
    #code

    // oneline comment, ctrl + slash
    /*
        multiline commnent
    */


    /* Standart output : echo, print, print_r, var_dump */
    echo "hello using echo <br>";
    print "hello using print <br>";
    print_r("hello using print_r<br>"); // string array
    var_dump("hello using var_dump"); // information of variable


    //sintaks php
    // 1 PHP didalam HTML
    // 2 PHP diluar HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >php didalam HTML</title>
</head>
<body>
    <h1> 
        <?php
            echo "teks PHP ini didalam HTML";
        ?>
    </h1>

    <?php
        echo "<h1>Ini HTML di dalam PHP</h1>";
    ?>

</body>
</html>

<!-- 
    variabel dan tipe data.    
    variabel ditandai $nama_variabel
    tidak perlu mendefinisikan tipe data untuk menyimpan variabel
-->



<?php
    $var = "hapiss";
    echo "halo, saya $var<br>";
?>

<!-- 
    operator + - * / %


    concat string
    dengan dengan tanda .
-->
<?php
    $first_name = "hapis";
    $last_name = "kiw kiw";

    echo $first_name . " " . $last_name;
?>

<!-- 
    assignment  = , += , -=,  .=, == , !=

    perbandingan ,  > , < , >=, <=, ==

    identitas ===, !== untuk mengecek tipe data dan value apakah sama. 

    and, or, not == && , || , !
-->

