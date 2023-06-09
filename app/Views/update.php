<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Form Pendaftaran</title>
    </head>
    <body>
        <h1>UPDATE ASISTEN PRAKTIKUM</h1><br>
        <form action="update" method="post">
            <?= csrf_field() ?>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" /></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" /></td>
                </tr>
                <tr>
                    <td>KELAS PRAKTIKUM</td>
                    <td>:</td>
                    <td><input type="text" name="praktikum" /></td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td><input type="text" name="ipk" /></td>
                </tr>
            </table><br>
            <input class="btn btn-primary" type="submit" name="" value="Update" />
        </form>
    </body>
</html>