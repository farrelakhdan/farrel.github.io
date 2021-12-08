<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleproses.css">
    </head>
    <body>
        <?php
        include "connection.php";

        $id=$_GET['id'];
        $query= "DELETE FROM dbdata WHERE id='$id'";
        $result=mysqli_query($connect, $query);

        if($result){
            ?>
            <div class="banner">
                <p>DATA BERHASIL DIHAPUS, SILAKAN KE </p>
                <a href="admin.php"> ADMIN </a>
            </div>
            <?php
        }else {
            ?>
                <div class="banner">
                    <p>DATA GAGAL DIHAPUS, SILAKAN KE </p>
                    <a href="admin.php"> ADMIN </a>
                </div>
            <?php
                echo mysqli_error($connect);
        }
        ?>
    </body>
</html>
