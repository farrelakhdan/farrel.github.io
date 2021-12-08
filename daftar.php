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

            $username = $_GET['username'];
            $password = $_GET['password'];
            
            $sql="INSERT INTO dbdata(id, nama, jeniskelamin, tempatlahir, tanggallahir, namaortu, alamat, kota, telp, asalsekolah, agama)
                    VALUE('$no', '$nama', '$jenis', '$tempat', '$tanggal', '$namaortu', '$alamat', '$kota', '$telp', '$asal', '$agama')";

            $sql1="INSERT INTO user(id,username,password, level)
            VALUE('','$username', '$password','2')";

            if(mysqli_query($connect, $sql) && mysqli_query($connect, $sql1)){
                ?>
                    <div class="banner">
                        <p>DATA BERHASIL DIMASUKKAN, SILAKAN KE </p>
                        <a href="index.html"> LOGIN </a>
                    </div>
                    <?php
            }else {
                ?>
                    <div class="banner">
                        <p>DATA GAGAL DIMASUKKAN, SILAKAN KE </p>
                        <a href="index.html"> LOGIN </a>
                    </div>
                <?php
                    echo mysqli_error($connect);
            }
        ?>
    </body>
</html>