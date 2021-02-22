<div class="container">
    <div class="row">
        <div class="col-8 offset-2 ">
            <div class="text-center m-4">
                <h1>TAMBAH DATA SEKOLAH</h1>
            </div>
            <form action="<?= BASEURL ?>sekolah/tambahSekolah" method="post">
                <h4>IDENTITAS</h4>
                <div class="form-group">
                    <label for="nama" >Nama : </label><br>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="NPSN">NPSN : </label><br>
                    <input type="text" class="form-control" name="NPSN" id="NPSN" required>
                </div>
                <div class="form-group">
                    <label for="jenjang">Jenjang : </label><br>
                    <input type="text" class="form-control" name="jenjang" id="jenjang" required>
                </div>
                <div class="form-group">
                    <label for="status">Status : </label><br>
                    <input type="text" class="form-control" name="status" id="status" required>
                </div>
                <div class="form-group">
                    <label for="akreditasi">Akreditasi : </label><br>
                    <input type="text" class="form-control" name="akreditasi" id="akreditasi" required>
                </div>
                <h4>ALAMAT</h4>
                <div class="form-group">
                    <label for="alamat">Alamat : </label><br>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="RT">RT : </label><br>
                    <input type="text" class="form-control" name="RT" id="RT" required>
                </div>
                <div class="form-group">
                    <label for="RW">RW : </label><br>
                    <input type="text" class="form-control" name="RW" id="RW" required>
                </div>
                <div class="form-group">
                    <label for="kdpos">Kode Pos : </label><br>
                    <input type="text" class="form-control" name="kdpos" id="kdpos" required>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan : </label><br>
                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan : </label><br>
                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" required>
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten : </label><br>
                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" required>
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi : </label><br>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" required>
                </div>
                <div class="form-group">
                    <label for="negara">Negara : </label><br>
                    <input type="text" class="form-control" name="negara" id="negara" required>
                </div>
                <h4>DATA PELENGKAP</h4>
                <div class="form-group">
                    <label for="skpendirian"> SK Pendirian Sekolah : </label><br>
                    <input type="text" class="form-control" name="skpendirian" id="skpendirian" required>
                </div>
                <div class="form-group">
                    <label for="sktanggal">Tanggal SK Pendirian : </label><br>
                    <input type="text" class="form-control" name="sktanggal" id="sktanggal" required>
                </div>
                <div class="form-group">
                    <label for="kepemilikan">Status Kepemilikan : </label><br>
                    <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" required>
                </div>
                <div class="form-group">
                    <label for="skoperasional">SK Izin Operasi : </label><br>
                    <input type="text" class="form-control" name="skoperasional" id="skoperasional" required>
                </div>
                <div class="form-group">
                    <label for="tglskoperasi">Tanggal Izin Operasional : </label><br>
                    <input type="text" class="form-control" name="tglskoperasi" id="tglskoperasi" required>
                </div>
                <div class="form-group">
                    <label for="kebkusus">Kebutuhan Khusus Dilayani : </label><br>
                    <input type="text" class="form-control" name="kebkusus" id="kebkusus" required>
                </div>
                <h4>AKUN BANK</h4>
                <div class="form-group">
                    <label for="norek"> Nomor Rekening : </label><br>
                    <input type="text" class="form-control" name="norek" id="norek" required>
                </div>
                <div class="form-group">
                    <label for="nmbank">Nama Bank : </label><br>
                    <input type="text" class="form-control" name="nmbank" id="nmbank" required>
                </div>
                <div class="form-group">
                    <label for="cabang">Cabang KCP/Unit : </label><br>
                    <input type="text" class="form-control" name="cabang" id="cabang" required>
                </div>
                <div class="form-group">
                    <label for="anrek">Rekening Atas Nama : </label><br>
                    <input type="text" class="form-control" name="anrek" id="anrek" required>
                </div>
                <h4>MANAJEMEN</h4>
                <div class="form-group">
                    <label for="MBS">MBS : </label><br>
                    <input type="text" class="form-control" name="MBS" id="MBS" require>
                </div>
                <div class="form-group">
                    <label for="nmwp">Nama Wajib Pajak : </label><br>
                    <input type="text" class="form-control" name="nmwp" id="nmwp" required>
                </div>
                <div class="form-group">
                    <label for="npwp"> NPWP : </label><br>
                    <input type="text" class="form-control" name="npwp" id="npwp" required>
                </div>
                <h4>KONTAK</h4>
                <div class="form-group">
                    <label for="notlp">Nomor Telepon : </label><br>
                    <input type="text" class="form-control" name="notlp" id="notlp" required>
                </div>
                <div class="form-group">
                    <label for="nofax">Nomor Fax : </label><br>
                    <input type="text" class="form-control" name="nofax" id="nofax" required>
                </div>
                <div class="form-group">
                    <label for="email">Email : </label><br>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="web"> Website : </label><br>
                    <input type="text" class="form-control" name="web" id="web">
                </div>
                <h4>DATA PERIODIK</h4>
                <div class="form-group">
                    <label for="kurikulum">Kurikulum : </label><br>
                    <input type="text" class="form-control" name="kurikulum" id="kurikulum" required>
                </div>
                <div class="form-group">
                    <label for="wtpny">Waktu Penyelenggaraan : </label><br>
                    <input type="text" class="form-control" name="wtpny" id="wtpny" required>
                </div>
                <div class="form-group">
                    <label for="bos">Bersedia Menerima BOS? : </label><br>
                    <input type="text" class="form-control" name="bos" id="bos" required>
                </div>
                <div class="form-group">
                    <label for="iso"> Sertifikasi ISO : </label><br>
                    <input type="text" class="form-control" name="iso" id="iso" required>
                </div>
                <div class="form-group">
                    <label for="sblistrik">Sumber Listrik : </label><br>
                    <input type="text" class="form-control" name="sblistrik" id="sblistrik" required>
                </div>
                <div class="form-group">
                    <label for="dylistrik">Daya Listrik (watt) : </label><br>
                    <input type="text" class="form-control" name="dylistrik" id="dylistrik" required>
                </div>
                <div class="form-group">
                    <label for="internet">Akses Internet : </label><br>
                    <input type="text" class="form-control" name="internet" id="internet" required>
                </div>
                <div class="form-group">
                    <label for="internetln"> Akses Internet Lainya : </label><br>
                    <input type="text" class="form-control" name="internetln" id="internetln">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>