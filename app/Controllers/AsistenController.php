<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController{
    public function index()
    {
        $model = new AsistenModel(); //membuat objek dari model

        //apabila tabel kosong, maka memasukkan data tersebut data
        if ($model->findAll() == null) {
            $model->insert(['NIM' => '195314058', 'NAMA' => 'BERNADETHA MEGA DEVINA 
            AYUNINGTYAS', 'PRAKTIKUM' => 'Pembelajaran Mesin', 'IPK' => '3.12']);
            $model->insert(['NIM' => '215314001', 'NAMA' => 'DEONISIUS AMADEUS FEBRIAN 
            SARDJANANTO', 'PRAKTIKUM' => 'Rekayasa Perangkat Lunak', 'IPK' => '3.5']);
            $model->insert(['NIM' => '215314002', 'NAMA' => 'WENRY MANGIHUT PURBA', 'PRAKTIKUM' => 'Pemrograman Berbasis Platform', 'IPK' => '3.02']);
            $model->insert(['NIM' => '215314003', 'NAMA' => 'RANGGA TRI NUGROHO', 'PRAKTIKUM' => 'Struktur Data Linear', 'IPK' => '3.3']);
            $model->insert(['NIM' => '215314004', 'NAMA' => 'GERARDUS KRISTHA BAYU 
            INDRAPUTRA', 'PRAKTIKUM' => 'Pembelajaran Mesin', 'IPK' => '3.8']);
            $model->insert(['NIM' => '215314005', 'NAMA' => 'DOMINICO SAVIO AMADIS FEBRIAN 
            SARDJANANTO', 'PRAKTIKUM' => 'Rekayasa Perangkat Lunak', 'IPK' => '3.4']);
            $model->insert(['NIM' => '215314006', 'NAMA' => 'FAJAR AL NAJIIM', 'PRAKTIKUM' => 'Struktur Data Linear', 'IPK' => '3.1']);
            $model->insert(['NIM' => '215314007', 'NAMA' => 'ALEXANDER ADMA KARYADI', 'PRAKTIKUM' => 'Pemrograman Berbasis Platform ', 'IPK' => '3.3']);
            $model->insert(['NIM' => '215314009', 'NAMA' => 'MAXIMUS SIMON WERANG', 'PRAKTIKUM' => 'Struktur Data Linear', 'IPK' => '3.25']);
            $model->insert(['NIM' => '215314010', 'NAMA' => 'SIRILUS ESPIANTO WILLY WASKITO ', 'PRAKTIKUM' => 'Pembelajaran Mesin', 'IPK' => '3.6']);
        }
        

        $data['asisten'] = $model->findAll(); //mengambil seluruh data dari tabel asisten

        return view('AsistenView', $data); //menampilkan view AsistenView
    }

    public function simpan()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('simpan');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost(['nim', 'nama', "praktikum", "ipk"]);

        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);

        $model->simpan($post);

        $job['message'] = 'disimpan';
        return view('success', $job);
    }

    public function update()
    {

        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('update');
        }
        // Mengambil data yang disubmit dari form
        $post = $this->request->getPost(['nim', 'nama', "praktikum", "ipk"]);

        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);

        $model->perbarui($post);

        $job['message'] = 'diperbarui';
        return view('success', $job);
    }

    public function delete()
    {
        helper('form');
        // Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
            return view('delete');
        }
        // Mengambil data yang disubmit dari form
        $nim = $this->request->getPost('nim');

        // Mengakses Model untuk menyimpan data
        $model = model(AsistenModel::class);

        $model->hapus($nim);

        $job['message'] = 'dihapus';
        return view('success', $job);
    }

    public function search(){
        if (!$this->request->is('post')) {
            return view('search');
        }

        $nim = $this->request->getPost('key');

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim);

        $data = ['hasil' => $asisten];
        return view('search', $data);
    }
}