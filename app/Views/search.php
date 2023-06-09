<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pendaftaran</title>
    </head>
    <body>
        <form action="search" method="post">
            <?= csrf_field() ?>
            Search:<input type="text" name="key" /><br />
            <input type="submit" name="submit" value="Search" />
        </form>

        <?php
            if(!empty($hasil)){
                echo "<h1> Hasil Pencarian </h1>";
                echo "Nama: ".$hasil['NAMA']."<br>";
                echo "Praktikum: ".$hasil['PRAKTIKUM']."<br>";
                echo "IPK: ".$hasil['IPK']."<br>";
            }
        ?>
    </body>
</html>