<div class="container mt-5">

    <div class="col-md-4">
        <form action="<?= BASEURL; ?>home/prosTambahUser" method="post" >
            <h3>Tambah Peminjam</h3>
            <label for="" class="mt-3">Nama peminjam</label>
            <input class="form-control mb-3" type="text" aria-label="default input example" name="nama" required>

            <label for="">Jenis Barang</label>
            <select class="form-select mb-3" aria-label="Default select example" name="jenis" required>
                <option hidden>Pilih</option>
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>

            <!-- <label for="">Jenis Barang</label>
            <input class="form-control mb-3" type="text" aria-label="default input example" name="penulis"> -->

            <label for="">Nomor Barang</label>
            <input class="form-control mb-3" type="number" aria-label="default input example" name="nomor" required>

            <label for="">Tanggal Pinjam</label>
            <input class="form-control mb-3" type="datetime-local" aria-label="default input example" name="tglMulai" required>


            <button type="submit" class="btn btn-primary  mt-3">submit</button>
        </form> 
    </div>
</div>