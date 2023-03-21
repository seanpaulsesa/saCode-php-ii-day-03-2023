<?php

    $namasiswa = ['elia','obet','aldhi','delvi'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data dari array</title>
</head>
<body>
    <h3>Data Siswa</h3>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>
        <?php $i=0; foreach($namasiswa as $siswa) : ?>  
        <tr>
            <td><?php echo ++ $i ?></td>
            <td><?php echo  $siswa ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>