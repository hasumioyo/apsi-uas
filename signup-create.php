<?php
    include "db.php";
    $email = htmlspecialchars($_POST['email']);
    $nama = htmlspecialchars($_POST['nama']);
    $password = htmlspecialchars($_POST['password']);

    // $sqli = "SELECT * FROM users WHERE email='$email'";
    // $qry = mysqli_query($connect, $sqli);
    // $row = mysqli_num_rows($qry);

    $check = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($check) == 0) {
        $sql = "INSERT INTO users (email, nama, password) VALUES ('$email','$nama','$password')";
        mysqli_query($connect, $sql);

        $pesan = "Data berhasil disimpan";
        $location = "location='index.php';";
    }
    else {
        $pesan = "Maaf email telah terdaftar";
        $location = "history.back();";
    }
?>
<script>

alert('<?=$pesan;?>');
<?=$location;?>

</script>   