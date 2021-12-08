<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleproses.css">
    </head>
    <body>
        <?php
            include "connection.php";

            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE username='$username' and password='$password' ";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);

            if ($row['level'] == 1) {
                ?>
                <div class="banner">
                    <p>LOGIN BERHASIL, SILAKAN KE HALAMAN </p>
                    <a href="admin.php"> HOME </a>
                </div>
                <?php
            }else if($row['level'] == 2) {
                ?>
                <div class="banner">
                    <p>LOGIN BERHASIL, SILAKAN KE HALAMAN </p>
                    <a href="guest.php"> HOME </a>
                </div>
                <?php
            }else {
                ?>
                <div class="banner">
                    <p>LOGIN GAGAL, SILAKAN KEMBALI KE </p>
                    <a href="index.html"> LOGIN </a>
                </div>
            <?php
                echo mysqli_error($connect);
            }
        ?>
    </body>
</html>
