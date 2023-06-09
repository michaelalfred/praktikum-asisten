<html lang="en">
<head>
    <title>APLIKASI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <div class="me-auto p-2 bd-highlight">
                <h1>Pendaftaran Asisten Praktikum</h1>
            </div>
            <div class="p-2 bd-highlight">
                <a class="btn btn-primary" href="<?= base_url('login/logout')?>" role="button">Logout</a>
            </div>
            
            
        </div>
        <table class="table table-bordered"> <!-- membuat table baru dengan border -->
            <thead> <!-- membuat table header dengan value No, NIM, NAMA, KELAS PRAKTIKUM, dan IPK -->
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>KELAS PRAKTIKUM</th>
                    <th>IPK</th>
                </tr>
            </thead>
            <tbody>
                <!-- membuat perulangan untuk mengisi data pada table -->
                <?php $no = 1; foreach ($asisten as $item):?> 
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $item['NIM'] ?></td>
                        <td><?= $item['NAMA'] ?></td>
                        <td><?= $item['PRAKTIKUM'] ?></td>
                        <td><?= $item['IPK'] ?></td>
                    </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary" href="<?= base_url('asisten/simpan')?>" role="button">Tambah</a>&emsp;
        <a class="btn btn-primary" href="<?= base_url('asisten/update')?>" role="button">Update</a>&emsp;
        <a class="btn btn-primary" href="<?= base_url('asisten/delete')?>" role="button">Hapus</a>
    </div>
</body>
</html>