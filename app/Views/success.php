<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Status</title>
    </head>
    <body>
        <h1>Data sukses <?php echo $message;?></h1><br>
        <a class="btn btn-primary" href="<?= base_url('asisten')?>" role="button">Kembali</a>
    </body>
</html>