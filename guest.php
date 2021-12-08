<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleHome.css">
    </head>
    <body>
        <header>
            <h1>HALAMAN HOME GUEST</h1>
        </header>
        <?php
            include "connection.php";
            
            $data = "SELECT * FROM dbdata" ;
            $query = mysqli_query($connect, $data);
        ?>
        <table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
            <th>NAMA ORTU</th>
            <th>ALAMAT</th>
            <th>KOTA</th>
            <th>TELEPON</th>
            <th>ASAL SEKOLAH</th>
            <th>AGAMA</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['nama'].'</td>
					<td>'.$row['jeniskelamin'].'</td>
					<td>'.$row['tempatlahir'].'</td>
                    <td>'.$row['tanggallahir'].'</td>
                    <td>'.$row['namaortu'].'</td>
                    <td>'.$row['alamat'].'</td>
                    <td>'.$row['kota'].'</td>
                    <td>'.$row['telp'].'</td>
                    <td>'.$row['asalsekolah'].'</td>
                    <td>'.$row['agama'].'</td>
				</tr>';
		}?>
	</table>
        <section class="banner">  
            <a href="index.html"> LOGOUT</a>
        </section>
    </body>
</html>