<?php
$nisn = $_POST['nisn'];
$sekolah = $_POST['sekolah'];
$lulus = $_POST['lulus'];

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$ttl = $_POST['ttl'];
$lahir = $_POST['lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$desa = $_POST['desa'];
$keca = $_POST['keca'];
$kab = $_POST['kab'];
$prov = $_POST['prov'];
$email = $_POST['email'];

$kk = $_POST['kk'];
$namaayah = $_POST['namaayah'];
$agamyah = $_POST['agamyah'];
$kerja = $_POST['kerja'];
$namaibu = $_POST['namaibu'];
$agamibu = $_POST['agamibu'];
$kerjaibu = $_POST['kerjaibu'];
$desortu = $_POST['desortu'];
$alamatortu = $_POST['alamatortu'];
$desortu = $_POST['desortu'];
$kecortu = $_POST['kecortu'];
$kabortu = $_POST['kabortu'];
$provortu = $_POST['provortu'];


?>
<!DOCTYPE html>
<head>
    <title>HASIL FORM PPDB 2022</title>
    <style>
        .h1
        {
            font-family: 'Times New Roman', Times, serif;
            background-color: rgb(224, 213, 106);
            text-align: center;
        }
        .t_kanan
        {
            text-align: right;
        }
        .table
        {
            border: black solid;
            background-color: rgb(224, 213, 106);
            font-family:'Times New Roman', Times, serif ;
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <h1 class="h1">HASIL FORM PPDB 2022</h1>
        <table class="table">
            <th><b>DATA SEKOLAH</b></th>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $nisn;?></td>
            </tr>
            <tr>
                <td>Asal sekolah</td>
                <td>:</td>
                <td><?php echo $sekolah;?></td>
            </tr>
            <tr>
                <td>Tahun lulus</td>
                <td>:</td>
                <td><?php echo $lulus;?></td>
            </tr>
            <th><b>DATA CALON PESERTA</b></th>
            <tr>
                <td>Nama lengkap</td>
                <td>:</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $nik;?></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal lahir</td>
                <td>:</td>
                <td><?php echo $ttl;?></td>
            </tr>
            <tr>
                <td>Foto Copy Akte Kelahiran</td>
                <td>:</td>
                <td><?php echo $lahir;?></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td><?php echo $jk;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat;?></td>
            </tr>
            <tr>
                <td>Desa/Kel.</td>
                <td>:</td>
                <td><?php echo $desa;?></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><?php echo $keca;?></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td><?php echo $kab;?></td>
            </tr>
            <tr>
                <td>provinsi</td>
                <td>:</td>
                <td><?php echo $prov;?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email;?></td>
            </tr>
            <th><b>DATA ORANG TUA</b></th>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                <td><?php echo $kk;?></td>
            </tr>
            <tr>
                <td>Nama Ayah Kandung</td>
                <td>:</td>
                <td><?php echo $namaayah;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamyah;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $kerja;?></td>
            </tr>
            <tr>
                <td>Nama ibu</td>
                <td>:</td>
                <td><?php echo $namaibu;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamibu;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $kerjaibu;?></td>
            </tr>
            <tr>
                <td>Alamat Orang Tua</td>
                <td>:</td>
                <td><?php echo $alamatortu;?></td>
            </tr>
            <tr>
                <td>Desa/Kel.</td>
                <td>:</td>
                <td><?php echo $desortu;?></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><?php echo $kecortu;?></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td><?php echo $kabortu;?></td>
            </tr>
            <tr>
                <td>provinsi</td>
                <td>:</td>
                <td><?php echo $provortu;?></td>
            </tr>
        </table>
    </form>
</body>