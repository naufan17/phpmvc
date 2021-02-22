<div class="container">
    <div class="row">
        <div class="col-8 offset-2 ">
            <div class="text-center m-4">
                <h1>TAMBAH DATA SEKOLAH</h1>
            </div>
            <form action="<?= BASEURL ?>sekolah/ubahSekolah" method="post">
                <h4>IDENTITAS</h4>
                <input type="hidden" class="form-control" name="ididentitas" id="nama" value="<?= $data['sekolah']['ididentitas'] ?>">
                <div class="form-group">
                    <label for="nama" >Nama : </label><br>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['sekolah']['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="NPSN">NPSN : </label><br>
                    <input type="text" class="form-control" name="NPSN" id="NPSN" value="<?= $data['sekolah']['NPSN'] ?>">
                </div>
                <div class="form-group">
                    <label for="jenjang">Jenjang : </label><br>
                    <input type="text" class="form-control" name="jenjang" id="jenjang" value="<?= $data['sekolah']['jenjang'] ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status : </label><br>
                    <input type="text" class="form-control" name="status" id="status" value="<?= $data['sekolah']['status'] ?>">
                </div>
                <div class="form-group">
                    <label for="akreditasi">Akreditasi : </label><br>
                    <input type="text" class="form-control" name="akreditasi" id="akreditasi" value="<?= $data['sekolah']['akreditasi'] ?>">
                </div>
                <h4>ALAMAT</h4>
                <div class="form-group">
                    <label for="alamat">Alamat : </label><br>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $data['sekolah']['alamat'] ?>">
                </div>
                <div class="form-group">
                    <label for="RT">RT : </label><br>
                    <input type="text" class="form-control" name="RT" id="RT" value="<?= $data['sekolah']['RT'] ?>">
                </div>
                <div class="form-group">
                    <label for="RW">RW : </label><br>
                    <input type="text" class="form-control" name="RW" id="RW" value="<?= $data['sekolah']['RW'] ?>">
                </div>
                <div class="form-group">
                    <label for="kdpos">Kode Pos : </label><br>
                    <input type="text" class="form-control" name="kdpos" id="kdpos" value="<?= $data['sekolah']['kdpos'] ?>">
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan : </label><br>
                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" value="<?= $data['sekolah']['kelurahan'] ?>">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan : </label><br>
                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $data['sekolah']['kecamatan'] ?>">
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten : </label><br>
                    <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="<?= $data['sekolah']['kabupaten'] ?>">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi : </label><br>
                    <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?= $data['sekolah']['provinsi'] ?>">
                </div>
                <div class="form-group">
                    <label for="negara">Negara : </label><br>
                    <input type="text" class="form-control" name="negara" id="negara" value="<?= $data['sekolah']['negara'] ?>">
                </div>
                <h4>DATA PELENGKAP</h4>
                <div class="form-group">
                    <label for="skpendirian"> SK Pendirian Sekolah : </label><br>
                    <input type="text" class="form-control" name="skpendirian" id="skpendirian" value="<?= $data['sekolah']['skpendirian'] ?>">
                </div>
                <div class="form-group">
                    <label for="sktanggal">Tanggal SK Pendirian : </label><br>
                    <input type="text" class="form-control" name="sktanggal" id="sktanggal" value="<?= $data['sekolah']['sktanggal'] ?>">
                </div>
                <div class="form-group">
                    <label for="kepemilikan">Status Kepemilikan : </label><br>
                    <input type="text" class="form-control" name="kepemilikan" id="kepemilikan" value="<?= $data['sekolah']['kepemilikan'] ?>">
                </div>
                <div class="form-group">
                    <label for="skoperasional">SK Izin Operasi : </label><br>
                    <input type="text" class="form-control" name="skoperasional" id="skoperasional" value="<?= $data['sekolah']['skoperasional'] ?>">
                </div>
                <div class="form-group">
                    <label for="tglskoperasi">Tanggal Izin Operasional : </label><br>
                    <input type="text" class="form-control" name="tglskoperasi" id="tglskoperasi" value="<?= $data['sekolah']['tglskoperasi'] ?>">
                </div>
                <div class="form-group">
                    <label for="kebkusus">Kebutuhan Khusus Dilayani : </label><br>
                    <input type="text" class="form-control" name="kebkusus" id="kebkusus" value="<?= $data['sekolah']['kebkusus'] ?>">
                </div>
                <h4>AKUN BANK</h4>
                <div class="form-group">
                    <label for="norek"> Nomor Rekening : </label><br>
                    <input type="text" class="form-control" name="norek" id="norek" value="<?= $data['sekolah']['norek'] ?>">
                </div>
                <div class="form-group">
                    <label for="nmbank">Nama Bank : </label><br>
                    <input type="text" class="form-control" name="nmbank" id="nmbank" value="<?= $data['sekolah']['nmbank'] ?>">
                </div>
                <div class="form-group">
                    <label for="cabang">Cabang KCP/Unit : </label><br>
                    <input type="text" class="form-control" name="cabang" id="cabang" value="<?= $data['sekolah']['cabang'] ?>">
                </div>
                <div class="form-group">
                    <label for="anrek">Rekening Atas Nama : </label><br>
                    <input type="text" class="form-control" name="anrek" id="anrek" value="<?= $data['sekolah']['anrek'] ?>">
                </div>
                <h4>MANAJEMEN</h4>
                <div class="form-group">
                    <label for="MBS">MBS : </label><br>
                    <input type="text" class="form-control" name="MBS" id="MBS" value="<?= $data['sekolah']['MBS'] ?>">
                </div>
                <div class="form-group">
                    <label for="nmwp">Nama Wajib Pajak : </label><br>
                    <input type="text" class="form-control" name="nmwp" id="nmwp" value="<?= $data['sekolah']['nmwp'] ?>">
                </div>
                <div class="form-group">
                    <label for="npwp"> NPWP : </label><br>
                    <input type="text" class="form-control" name="npwp" id="npwp" value="<?= $data['sekolah']['npwp'] ?>">
                </div>
                <h4>KONTAK</h4>
                <div class="form-group">
                    <label for="notlp">Nomor Telepon : </label><br>
                    <input type="text" class="form-control" name="notlp" id="notlp" value="<?= $data['sekolah']['notlp'] ?>">
                </div>
                <div class="form-group">
                    <label for="nofax">Nomor Fax : </label><br>
                    <input type="text" class="form-control" name="nofax" id="nofax" value="<?= $data['sekolah']['nofax'] ?>>
                </div>
                <div class="form-group">
                    <label for="email">Email : </label><br>
                    <input type="text" class="form-control" name="email" id="email" value="<?= $data['sekolah']['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="web"> Website : </label><br>
                    <input type="text" class="form-control" name="web" id="web" value="<?= $data['sekolah']['web'] ?>">
                </div>
                <h4>DATA PERIODIK</h4>
                <div class="form-group">
                    <label for="kurikulum">Kurikulum : </label><br>
                    <input type="text" class="form-control" name="kurikulum" id="kurikulum" value="<?= $data['sekolah']['kurikulum'] ?>">
                </div>
                <div class="form-group">
                    <label for="wtpny">Waktu Penyelenggaraan : </label><br>
                    <input type="text" class="form-control" name="wtpny" id="wtpny" value="<?= $data['sekolah']['wtpny'] ?>">
                </div>
                <div class="form-group">
                    <label for="bos">Bersedia Menerima BOS? : </label><br>
                    <input type="text" class="form-control" name="bos" id="bos" value="<?= $data['sekolah']['bos'] ?>">
                </div>
                <div class="form-group">
                    <label for="iso"> Sertifikasi ISO : </label><br>
                    <input type="text" class="form-control" name="iso" id="iso" value="<?= $data['sekolah']['iso'] ?>">
                </div>
                <div class="form-group">
                    <label for="sblistrik">Sumber Listrik : </label><br>
                    <input type="text" class="form-control" name="sblistrik" id="sblistrik" value="<?= $data['sekolah']['sblistrik'] ?>">
                </div>
                <div class="form-group">
                    <label for="dylistrik">Daya Listrik (watt) : </label><br>
                    <input type="text" class="form-control" name="dylistrik" id="dylistrik" value="<?= $data['sekolah']['dylistrik'] ?>">
                </div>
                <div class="form-group">
                    <label for="internet">Akses Internet : </label><br>
                    <input type="text" class="form-control" name="internet" id="internet" value="<?= $data['sekolah']['internet'] ?>">
                </div>
                <div class="form-group">
                    <label for="internetln"> Akses Internet Lainya : </label><br>
                    <input type="text" class="form-control" name="internetln" id="internetln" value="<?= $data['sekolah']['internetln'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>