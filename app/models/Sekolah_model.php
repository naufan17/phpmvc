<?php

class Sekolah_model{
    // variabel untuk menampung database
    private $db;

    // memanggil kelas database
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllSekolah(){
        $query = "SELECT ididentitas, nama, NPSN, jenjang, status, akreditasi, alamat FROM identitas 
        INNER JOIN alamat ON identitas.idalamat=alamat.idalamat";
        
        $this->db->query($query);
        
        return $this->db->resultSet();
    }

    public function getSekolahById($id){
        $query = "SELECT * FROM identitas 
        INNER JOIN alamat ON identitas.idalamat=alamat.idalamat
        INNER JOIN dtperiodik ON identitas.iddtperiodik=dtperiodik.iddtperiodik
        INNER JOIN pelengkap ON identitas.idpelengkap=pelengkap.idpelengkap
        INNER JOIN manajemen ON dtperiodik.idmanajemen=manajemen.idmanajemen
        INNER JOIN kontak ON alamat.idkontak=kontak.idkontak
        INNER JOIN akunbank ON alamat.idbank=akunbank.idbank
        WHERE ididentitas = :id";
        
        $this->db->query($query);
        
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }

    public function tambahDataSekolah($data){
        $query = "INSERT INTO kontak VALUES('', :notlp, :nofax, :email, :web); 
        INSERT INTO akunbank VALUES('', :norek, :nmbank, :cabang, :anrek);
        INSERT INTO alamat VALUES('', :alamat, :RT, :RW, :kdpos, :kelurahan, :kecamatan, :kabupaten, :provinsi, :negara,
        (SELECT MAX(idbank) FROM akunbank), (SELECT MAX(idkontak) FROM kontak));
        INSERT INTO manajemen VALUES('', :MBS, :nmwp, :npwp);
        INSERT INTO dtperiodik VALUES('', :kurikulum, :wtpny, :bos, :iso, :sblistrik, :dylistrik, :internet, :internetln,
        (SELECT MAX(idmanajemen) FROM manajemen));
        INSERT INTO pelengkap VALUES('', :skpendirian, :sktanggal, :kepemilikan, :skoperasional, :tglskoperasi, :kebkusus);
        INSERT INTO identitas VALUES('', :nama, :NPSN, :jenjang, :status, :akreditasi, 
        (SELECT MAX(idpelengkap) FROM pelengkap), (SELECT MAX(idalamat) FROM alamat), (SELECT MAX(iddtperiodik) FROM dtperiodik))";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('NPSN', $data['NPSN']);
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('akreditasi', $data['akreditasi']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('RT', $data['RT']);
        $this->db->bind('RW', $data['RW']);
        $this->db->bind('kdpos', $data['kdpos']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('kabupaten', $data['kabupaten']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('negara', $data['negara']);
        $this->db->bind('skpendirian', $data['skpendirian']);
        $this->db->bind('sktanggal', $data['sktanggal']);
        $this->db->bind('kepemilikan', $data['kepemilikan']);
        $this->db->bind('skoperasional', $data['skoperasional']);
        $this->db->bind('tglskoperasi', $data['tglskoperasi']);
        $this->db->bind('kebkusus', $data['kebkusus']);
        $this->db->bind('norek', $data['norek']);
        $this->db->bind('nmbank', $data['nmbank']);
        $this->db->bind('cabang', $data['cabang']);
        $this->db->bind('anrek', $data['anrek']);
        $this->db->bind('MBS', $data['MBS']);
        $this->db->bind('nmwp', $data['nmwp']);
        $this->db->bind('npwp', $data['npwp']);
        $this->db->bind('notlp', $data['notlp']);
        $this->db->bind('nofax', $data['nofax']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('web', $data['web']);
        $this->db->bind('kurikulum', $data['kurikulum']);
        $this->db->bind('wtpny', $data['wtpny']);
        $this->db->bind('bos', $data['bos']);
        $this->db->bind('iso', $data['iso']);
        $this->db->bind('sblistrik', $data['sblistrik']);
        $this->db->bind('dylistrik', $data['dylistrik']);
        $this->db->bind('internet', $data['internet']);
        $this->db->bind('internetln', $data['internetln']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSekolah($id){
        $query = "DELETE identitas, alamat, dtperiodik, pelengkap, manajemen, kontak, akunbank 
        FROM identitas
        INNER JOIN alamat ON identitas.idalamat=alamat.idalamat
        INNER JOIN dtperiodik ON identitas.iddtperiodik=dtperiodik.iddtperiodik
        INNER JOIN pelengkap ON identitas.idpelengkap=pelengkap.idpelengkap
        INNER JOIN manajemen ON dtperiodik.idmanajemen=manajemen.idmanajemen
        INNER JOIN kontak ON alamat.idkontak=kontak.idkontak
        INNER JOIN akunbank ON alamat.idbank=akunbank.idbank 
        WHERE ididentitas = :id";

        $this->db->query($query);
        $this->db->bind('id',$id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSekolah($data){
        $query = "UPDATE identitas 
        INNER JOIN alamat ON identitas.idalamat=alamat.idalamat
        INNER JOIN dtperiodik ON identitas.iddtperiodik=dtperiodik.iddtperiodik
        INNER JOIN pelengkap ON identitas.idpelengkap=pelengkap.idpelengkap
        INNER JOIN manajemen ON dtperiodik.idmanajemen=manajemen.idmanajemen
        INNER JOIN kontak ON alamat.idkontak=kontak.idkontak
        INNER JOIN akunbank ON alamat.idbank=akunbank.idbank 
        SET nama = :nama, NPSN = :NPSN, jenjang = :jenjang, status = :status, akreditasi = :akreditasi, alamat = :alamat, RT = :RT, RW = :RW, 
        kdpos = :kdpos, kelurahan = :kelurahan, kecamatan = :kecamatan, kabupaten = :kabupaten, provinsi = :provinsi, negara = :negara, 
        skpendirian = :skpendirian, sktanggal = :sktanggal, kepemilikan = :kepemilikan, skoperasional = :skoperasional, 
        tglskoperasi = :tglskoperasi, kebkusus = :kebkusus, norek = :norek, nmbank = :nmbank, cabang = :cabang, anrek = :anrek, MBS = :MBS, 
        nmwp = :nmwp, npwp = :npwp, notlp = :notlp, nofax =:nofax, email = :email, web = :web, kurikulum = :kurikulum, wtpny = :wtpny, 
        bos = :bos, iso = :iso, sblistrik = :sblistrik, dylistrik = :dylistrik, internet = :internet, internetln = :internetln
        WHERE ididentitas = :ididentitas";

        $this->db->query($query);

        $this->db->bind('ididentitas', $data['ididentitas']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('NPSN', $data['NPSN']);
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('akreditasi', $data['akreditasi']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('RT', $data['RT']);
        $this->db->bind('RW', $data['RW']);
        $this->db->bind('kdpos', $data['kdpos']);
        $this->db->bind('kelurahan', $data['kelurahan']);
        $this->db->bind('kecamatan', $data['kecamatan']);
        $this->db->bind('kabupaten', $data['kabupaten']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('negara', $data['negara']);
        $this->db->bind('skpendirian', $data['skpendirian']);
        $this->db->bind('sktanggal', $data['sktanggal']);
        $this->db->bind('kepemilikan', $data['kepemilikan']);
        $this->db->bind('skoperasional', $data['skoperasional']);
        $this->db->bind('tglskoperasi', $data['tglskoperasi']);
        $this->db->bind('kebkusus', $data['kebkusus']);
        $this->db->bind('norek', $data['norek']);
        $this->db->bind('nmbank', $data['nmbank']);
        $this->db->bind('cabang', $data['cabang']);
        $this->db->bind('anrek', $data['anrek']);
        $this->db->bind('MBS', $data['MBS']);
        $this->db->bind('nmwp', $data['nmwp']);
        $this->db->bind('npwp', $data['npwp']);
        $this->db->bind('notlp', $data['notlp']);
        $this->db->bind('nofax', $data['nofax']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('web', $data['web']);
        $this->db->bind('kurikulum', $data['kurikulum']);
        $this->db->bind('wtpny', $data['wtpny']);
        $this->db->bind('bos', $data['bos']);
        $this->db->bind('iso', $data['iso']);
        $this->db->bind('sblistrik', $data['sblistrik']);
        $this->db->bind('dylistrik', $data['dylistrik']);
        $this->db->bind('internet', $data['internet']);
        $this->db->bind('internetln', $data['internetln']);
    
        $this->db->execute(); 
        
        return $this->db->rowCount();
    }

    public function cariDataSekolah($keyword){
        $query = "SELECT * FROM identitas 
        INNER JOIN alamat ON identitas.idalamat=alamat.idalamat
        INNER JOIN dtperiodik ON identitas.iddtperiodik=dtperiodik.iddtperiodik
        INNER JOIN pelengkap ON identitas.idpelengkap=pelengkap.idpelengkap
        INNER JOIN manajemen ON dtperiodik.idmanajemen=manajemen.idmanajemen
        INNER JOIN kontak ON alamat.idkontak=kontak.idkontak
        INNER JOIN akunbank ON alamat.idbank=akunbank.idbank 
        WHERE nama LIKE '%$keyword%' OR NPSN LIKE '%$keyword%' OR jenjang LIKE '%$keyword%' OR status LIKE '%$keyword%' OR akreditasi LIKE '%$keyword%'
        OR alamat LIKE '%$keyword%' OR RT LIKE '%$keyword%' OR RW LIKE '%$keyword%' OR kdpos LIKE '%$keyword%' OR kelurahan LIKE '%$keyword%' 
        OR kecamatan LIKE '%$keyword%' OR kabupaten LIKE '%$keyword%' OR provinsi LIKE '%$keyword%' OR negara LIKE '%$keyword%' 
        OR skpendirian LIKE '%$keyword%' OR sktanggal LIKE '%$keyword%' OR kepemilikan LIKE '%$keyword%' OR skoperasional LIKE '%$keyword%' 
        OR tglskoperasi LIKE '%$keyword%' OR kebkusus LIKE '%$keyword%' OR norek LIKE '%$keyword%' OR nmbank LIKE '%$keyword%' 
        OR cabang LIKE '%$keyword%' OR anrek LIKE '%$keyword%' OR MBS LIKE '%$keyword%' OR nmwp LIKE '%$keyword%' OR npwp LIKE '%$keyword%' 
        OR notlp LIKE '%$keyword%' OR nofax LIKE '%$keyword%' OR email LIKE '%$keyword%' OR web LIKE '%$keyword%' OR kurikulum LIKE '%$keyword%' 
        OR wtpny LIKE '%$keyword%' OR bos LIKE '%$keyword%' OR iso LIKE '%$keyword%' OR sblistrik LIKE '%$keyword%' OR dylistrik LIKE '%$keyword%' 
        OR internet LIKE '%$keyword%' OR internetln LIKE '%$keyword%'";
        
        $this->db->query($query);
    
        $this->db->execute(); 
        
        return $this->db->single();
    }
}
