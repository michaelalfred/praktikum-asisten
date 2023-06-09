<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten'; //nama tabel yang akan diakses
    protected $primaryKey = 'NIM'; //primary key dari tabel
    protected $allowedFields = ['NIM', 'NAMA', 'PRAKTIKUM', 'IPK']; //field yang dapat diakses oleh user

    public function simpan($record)
    {
        $this->insert([
            'NIM' => $record['nim'],
            'NAMA' => $record['nama'],
            'PRAKTIKUM' => $record['praktikum'],
            'IPK' => $record['ipk'],
        ]);
    }

    public function perbarui($record)
    {
        $this->update($record['nim'], [
            'NAMA' => $record['nama'],
            'PRAKTIKUM' => $record['praktikum'],
            'IPK' => $record['ipk'],
        ]);
    }

    public function hapus($nim)
    {
        $this->delete($nim);
    }

    public function ambil($nim)
    {
        return $this->where('NIM', $nim)->first();
    }
}
?>