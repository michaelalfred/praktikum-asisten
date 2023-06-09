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
        <h1>PENGHAPUSAN ASISTEN PRAKTIKUM</h1><br>
        <form action="delete" method="post">
            <?= csrf_field() ?>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" /></td>
                </tr>
            </table><br>
            <input class="btn btn-primary" type="submit" name="" value="Hapus" />
        </form>
    </body>
</html>