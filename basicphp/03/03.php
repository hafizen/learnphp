<!--
    Condition
    if
    if else
    if, else if, else
    ternary
    switch
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        .warna-baris{
            background-color: grey ;
        }
    </style>
</head>
<body>
    <!--
        mengganti kurung kurawal dengan : end{nama_looping}  
    -->
    <table border="1"; cellpadding="10", cellspacing="0">
    <?php for($i = 1;$i < 11;$i++) :  ?>
        <?php if($i % 2 == 0) : ?>
            <tr class="warna-baris">
            <?php endif; ?>
            <?php for($j= 1; $j < 11; $j++) : ?>
                <td>
                    <?php echo "$i , $j"; ?>
                </td>
                <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
    
</body>
</html> 