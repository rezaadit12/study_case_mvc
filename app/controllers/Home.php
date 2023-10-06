<?php


class Home extends Controller{

    public function index(){
        

        $data['judul'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('Home/home');
        $this->view('templates/footer');
    }

    public function listData(){
        $data['judul'] = 'LIST DATA';   
        $data['listDataBarang'] = $this->model('Pinjam_model')->getName();

        $this->view('templates/header', $data);
        $this->view('PagePinjam/pinjam', $data);
        $this->view('templates/footer');
    }

    public function tambahUser()
    {
        $data['judul'] = 'Tambah Peminjam';

        $this->view('templates/header', $data);
        $this->view('pagePinjam/tambahPinjam');
        $this->view('templates/footer');
    }

    public function prosTambahUser()
    {


        if($_POST['jenis'] == 'Pilih'){
            Sweetalert::sweetOn('Gagal!', 'jenis barang belum dipilih, coba lagi!', 'error' );
            header('Location: '. BASEURL. '/home/listData');
            die;
        }

        if($this->model('Pinjam_model')->tambahData($_POST) > 0){
            Sweetalert::sweetOn('Berhasil!', 'Data berhasil ditambahkan', 'success' );
            header('Location: '. BASEURL. '/home/listData');
        }else{
            Sweetalert::sweetOn('Opss...', 'Data gagal ditambahkan', 'error' );
            header('Location: '. BASEURL. '/home/listData');
        }
    }


    
    public function editBarang($id)
    {
        $data['judul'] = 'Edit Data';
        $data['data'] = $this->model('Pinjam_model')->getDataBy($id);


        $this->view('templates/header', $data);
        $this->view('pagePinjam/edit', $data);
        $this->view('templates/footer');

    }

    public function prosEdit()
    {
        if($this->model('Pinjam_model')->editData($_POST) > 0){
            Sweetalert::sweetOn('Berhasil!', 'Data berhasil diedit', 'success' );
            header('Location: '. BASEURL. 'home/listData');

        }else{
            Sweetalert::sweetOn('Opss...', 'Terjadi kesalahan, Coba lagi!', 'error' );
            header('Location: '. BASEURL. 'home/listData');
        }
    }


    public function hapus($id)
    {
        if($this->model('Pinjam_model')->hapusById($id) > 0){
            Sweetalert::sweetOn('Berhasil!', 'Data berhasil dihapus', 'success' );
            header('Location: '. BASEURL. 'home/listData');
        }else{
            Sweetalert::sweetOn('Opss...', 'Terjadi kesalahan, Coba lagi!', 'error' );
            header('Location: '. BASEURL. 'home/listData');
        }
    }

    public function cari()
    {
        $data['judul'] = 'LIST DATA';   
        $data['listDataBarang'] = $this->model('Pinjam_model')->cariData();

        $this->view('templates/header', $data);
        $this->view('PagePinjam/pinjam', $data);
        $this->view('templates/footer');
    }




    
}


