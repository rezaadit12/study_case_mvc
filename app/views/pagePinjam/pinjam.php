<div class="container mt-4">
    <?= Sweetalert::sweet(); ?>

    <h2>Daftar Peminjam</h2>
    <nav class="navbar mt-5">
        <div class="container-fluid">
            <a class=" btn btn-primary" href="<?= BASEURL; ?>home/tambahUser">Tambah Peminjam</a>
            <div class="seacrh" style="display:flex;">
                <form action="<?= BASEURL; ?>/home/cari" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Cari Data" required>
                        <input type="submit" class="btn btn-outline-secondary" value="Cari">
                    </div>
                </form>
                <form action="<?= BASEURL ?>home/listData" method="post">
                    <input type="submit" style="margin-left:9px;" class="btn btn-outline-danger" value="Reset">
                </form>

            </div>
        </div>
    </nav>
    <table class="table table-responsive table-striped table-bordered mt-3 mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i = 1; ?>
            <?php date_default_timezone_set("asia/jakarta")  ?>
            
            <?php foreach($data['listDataBarang'] as $data) :?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $data['nama_peminjam']; ?></td>
                <td><?= $data['jenis_barang']; ?></td>
                <td><?= $data['no_barang']; ?></td>
                <td><?= $data['tgl_pinjam']; ?></td>
                <td><?= $data['tgl_kembali']; ?></td>


                <td>
                    <?php if($data['tgl_pinjam'] >= $data['tgl_kembali'] ||date('Y-m-d H:i:s') >= $data['tgl_kembali']):?>
                    <span class="badge text-bg-success">Sudah Kembali</span>
                    <?php else:?>
                    <span class="badge text-bg-danger">Belum kembali</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($data['tgl_pinjam'] >= $data['tgl_kembali']) :?>
                    <a href="<?= BASEURL;?>home/hapus/<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin')" >Hapus</a>
                    <?php else:?>
                    <a href="<?= BASEURL;?>home/editBarang/<?= $data['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?= BASEURL;?>home/hapus/<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin')">Hapus</a>
                    <?php endif; ?>
                    <!-- =============  ============== -->

                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</div>


<!-- onclick="konfirmasi()"
onclick="konfirmasi()" -->


<!-- <script>
function konfirmasi() {
    Swal.fire({
        title: 'Kamu yakin?',
        text: "Periksa kembali sebelum menghapus data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'hapus'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= BASEURL;?>home/hapus/<?= $data['id']; ?>";
        }
    })
}
</script> -->