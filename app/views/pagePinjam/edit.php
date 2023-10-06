<div class="container mt-5">

    <div class="col-md-4">
        <form action="<?= BASEURL; ?>home/prosEdit" method="post" >
            <h3>Edit Peminjaman</h3>
            <input class="form-control mb-3" type="hidden" aria-label="default input example" name="id" value="<?= $data['data']['id']; ?>">

            <label for="" class="mt-3">Nama peminjam</label>
            <input class="form-control mb-3" type="text" aria-label="default input example" name="nama" value="<?= $data['data']['nama_peminjam']; ?>">

            <label for="">Jenis Barang</label>
            <select class="form-select mb-3" aria-label="Default select example" name="jenis" >
                <option hidden><?= $data['data']['jenis_barang']; ?></option>
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>

            <!-- <label for="">Jenis Barang</label>
            <input class="form-control mb-3" type="text" aria-label="default input example" name="penulis"> -->

            <label for="">Nomor Barang</label>
            <input class="form-control mb-3" type="text" aria-label="default input example" name="nomor" value="<?= $data['data']['no_barang']; ?>">

            <label for="">Tanggal Pinjam</label>
            <input class="form-control mb-3" type="datetime-local" aria-label="default input example" name="tglMulai" value="<?= $data['data']['tgl_pinjam']; ?>">


            <label for="">Tanggal Kembali</label>
            <input class="form-control mb-3" type="datetime-local" aria-label="default input example" name="tglSelesai" value="<?= $data['data']['tgl_kembali']; ?>">


            <button type="submit" class="btn btn-primary  mt-3">submit</button>
        </form> 
    </div>
</div>