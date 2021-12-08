<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleHome.css">
    </head>
    <body>
        <header>
            <h1>HALAMAN HOME ADMIN</h1>
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
            ?>
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row["jeniskelamin"]?></td>
				<td><?php echo $row["tempatlahir"]?></td>
                <td><?php echo $row["tanggallahir"]?></td>
                <td><?php echo $row["namaortu"]?></td>
                <td><?php echo $row["alamat"]?></td>
                <td><?php echo $row["kota"]?></td>
                <td><?php echo $row["telp"]?></td>
                <td><?php echo $row["asalsekolah"]?></td>
                <td><?php echo $row["agama"]?></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>"> Edit </a></td>
                <td><a href="hapus.php?id=<?php echo $row['id']?>"> Hapus </a></td>
			</tr>
            <?php
		}?>
	</table>
        <section class="banner">  
            <a href="index.html"> LOGOUT</a>
        </section>
    </body>
</html>