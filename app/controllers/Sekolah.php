<?php

class Sekolah extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Sekolah';
        $data['sekolah'] = $this->model('Sekolah_model')->getAllSekolah();
        $this->view('templates/header', $data);
        $this->view('sekolah/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Sekolah';
        $data['sekolah'] = $this->model('Sekolah_model')->getSekolahById($id);
        $this->view('templates/header', $data);
        $this->view('sekolah/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Tambah Data Sekolah';
        $this->view('templates/header', $data);
        $this->view('sekolah/tambah');
        $this->view('templates/footer');
    }

    public function tambahSekolah(){
        if($this->model('Sekolah_model')->tambahDataSekolah($_POST)>0){
            Flasher::setFlash('berhasil', 'ditambah', 'success');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambah', 'danger');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('Sekolah_model')->hapusDataSekolah($id)>0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }
    }

    public function ubah($id){
        $data['judul'] = 'Ubah Sekolah';
        $data['sekolah'] = $this->model('Sekolah_model')->getSekolahById($id);
        $this->view('templates/header', $data);
        $this->view('sekolah/ubah', $data);
        $this->view('templates/footer');
    }

    public function ubahSekolah(){
        if($this->model('Sekolah_model')->ubahDataSekolah($_POST)>0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'sekolah/index');
            exit;
        }
    }

    public function cari(){
        $data['judul'] = 'Detail Sekolah';
        $data['sekolah'] = $this->model('Sekolah_model')->cariDataSekolah($_POST['keyword']);
        $this->view('templates/header', $data);
        $this->view('sekolah/detail', $data);
        $this->view('templates/footer');
    }
}