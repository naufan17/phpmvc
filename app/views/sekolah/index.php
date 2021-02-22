<!-- Sidebar -->
<div class="wrapper">
    <nav id="sidebar">
        <form class="left" align="left" action="<?= BASEURL ?>sekolah/cari" method="post">
            <br>
            <h2>Cari</h2>
            <input type="text" name="keyword" placeholder="Masukkan Pencarian" required>
            <button type="submit" name="cari">Cari</button>
        </form>
    </nav>
    <!-- Akhir Sidebar -->
    <!-- Navbar -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-light mx-1">
                    <i class="fas fa-align-left"></i>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!--Akhir Navbar -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center m-4">
                    <h1>DAFTAR SEKOLAH</h1>
                </div>
                <?php Flasher::flash(); ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Sekolah</th>
                            <th scope="col">NPSN</th>
                            <th scope="col">Jenjang</th>
                            <th scope="col">Status</th>
                            <th scope="col">Akreditasi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach($data['sekolah'] as $sklh) : ?>
                        <tr>                    
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sklh['nama'] ?></td>
                            <td><?= $sklh['NPSN'] ?></td>
                            <td><?= $sklh['jenjang'] ?></td>
                            <td><?= $sklh['status'] ?></td>
                            <td><?= $sklh['akreditasi'] ?></td>
                            <td><?= $sklh['alamat'] ?></td>
                            <td>
                                <a href="<?= BASEURL ?>sekolah/hapus/<?= $sklh['ididentitas']?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
                                <a href="<?= BASEURL ?>sekolah/ubah/<?= $sklh['ididentitas']?>" class="badge badge-success">Ubah</a>
                                <a href="<?= BASEURL ?>sekolah/detail/<?= $sklh['ididentitas']?>" class="badge badge-primary">Detail</a>
                            </td>  
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form">Tambahkan Data</button>
                    <a href="<?= BASEURL ?>sekolah/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="form" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="formLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formLabel">Form Isi Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>askdbasjdbsajkbkjsh</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-primary">Tambahkan</button>
            </div>
        </div>
    </div>
</div>
