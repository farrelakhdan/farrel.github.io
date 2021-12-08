<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleproses.css">
    </head>
    <body>
        <?php
            include "connection.php";

            $nama = $_GET['nama'];
            $no = $_GET['no'];
            $jenis = $_GET['jenis'];
            $tempat = $_GET['tempat'];
            $tanggal = $_GET['tgl'];
            $namaortu = $_GET['namaortu'];
            $alamat = $_GET['alamat'];
            $kota = $_GET['kota'];
            $telp = $_GET['telp'];
            $asal = $_GET['asal'];
            $agama = $_GET['agama'];

            $query="UPDATE dbdata SET nama='$nama', jeniskelamin='$jenis', tempatlahir='$tempat',
                    tanggallahir='$tanggal', namaortu='$namaortu', alamat='$alamat',
                    kota='$kota', telp='$telp', asalsekolah='$asal', agama='$agama' where id='$no'";
            $result=mysqli_query($connect, $query);

            if($result){
                ?>
                    <div class="banner">
                        <p>DATA BERHASIL DIUPDATE, SILAKAN KE </p>
                        <a href="admin.php"> ADMIN </a>
                    </div>
                    <?php
            }else {
                ?>
                    <div class="banner">
                        <p>DATA GAGAL DIUPDATE, SILAKAN KE </p>
                        <a href="admin.php"> ADMIN </a>
                    </div>
                <?php
                    echo mysqli_error($connect);
            }
        ?>
    </body>
</html>