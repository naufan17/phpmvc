<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center m-4">
                <h1>DETAIL SEKOLAH</h1>
            </div>
            <h4>IDENTITAS</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">NPSN</th>
                        <th scope="col">Jenjang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Akreditas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['nama'] ?></td>
                        <td><?= $data['sekolah']['NPSN'] ?></td>
                        <td><?= $data['sekolah']['jenjang'] ?></td>
                        <td><?= $data['sekolah']['status'] ?></td>
                        <td><?= $data['sekolah']['akreditasi'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>ALAMAT</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Alamat</th>
                        <th scope="col">RT/RW</th>
                        <th scope="col">Kode Pos</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kabupaten</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Negara</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['alamat'] ?></td>
                        <td><?= $data['sekolah']['RT'] ?> / <?= $data['sekolah']['RW'] ?></td>
                        <td><?= $data['sekolah']['kdpos'] ?></td>
                        <td><?= $data['sekolah']['kelurahan'] ?></td>
                        <td><?= $data['sekolah']['kecamatan'] ?></td>
                        <td><?= $data['sekolah']['kabupaten'] ?></td>
                        <td><?= $data['sekolah']['provinsi'] ?></td>
                        <td><?= $data['sekolah']['negara'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>DATA PELENGKAP</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SK Pendirian Sekolah</th>
                        <th scope="col">Tanggal SK Pendirian</th>
                        <th scope="col">Status Kepemiikan</th>
                        <th scope="col">SK Izin Operasional</th>
                        <th scope="col">Tanggal Izin Operasional</th>
                        <th scope="col">Kebutuhan Khusus Dilayani</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['skpendirian'] ?></td>
                        <td><?= $data['sekolah']['sktanggal'] ?></td>
                        <td><?= $data['sekolah']['kepemilikan'] ?></td>
                        <td><?= $data['sekolah']['skoperasional'] ?></td>
                        <td><?= $data['sekolah']['tglskoperasi'] ?></td>
                        <td><?= $data['sekolah']['kebkusus'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>AKUN BANK</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nomer Rekening</th>
                        <th scope="col">Akun Bank</th>
                        <th scope="col">Cabang KCP/Unit</th>
                        <th scope="col">Rekening Atas Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['norek'] ?></td>
                        <td><?= $data['sekolah']['nmbank'] ?></td>
                        <td><?= $data['sekolah']['cabang'] ?></td>
                        <td><?= $data['sekolah']['anrek'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>MANAJEMEN</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">MBS</th>
                        <th scope="col">Nama Wajib Pajak</th>
                        <th scope="col">NPWP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['MBS'] ?></td>
                        <td><?= $data['sekolah']['nmwp'] ?></td>
                        <td><?= $data['sekolah']['npwp'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>KONTAK</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Nomor Fax</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['notlp'] ?></td>
                        <td><?= $data['sekolah']['nofax'] ?></td>
                        <td><?= $data['sekolah']['email'] ?></td>
                        <td><?= $data['sekolah']['web'] ?></td>
                    </tr>
                </tbody>
            </table>
            <h4>DATA PERIODIK</h4>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kurikulum</th>
                        <th scope="col">Waktu Penyelenggaraan</th>
                        <th scope="col">Bersedia Menerima BOS?</th>
                        <th scope="col">Sertifikasi ISO</th>
                        <th scope="col">Sumber Listrik</th>
                        <th scope="col">Daya Listrik</th>
                        <th scope="col">Akses Internet</th>
                        <th scope="col">Akses Internet Lainya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                    
                        <td><?= $data['sekolah']['kurikulum'] ?></td>
                        <td><?= $data['sekolah']['wtpny'] ?></td>
                        <td><?= $data['sekolah']['bos'] ?></td>
                        <td><?= $data['sekolah']['iso'] ?></td>
                        <td><?= $data['sekolah']['sblistrik'] ?></td>
                        <td><?= $data['sekolah']['dylistrik'] ?></td>
                        <td><?= $data['sekolah']['internet'] ?></td>
                        <td><?= $data['sekolah']['internetln'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>