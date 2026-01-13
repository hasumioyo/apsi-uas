<?php
session_start();
include "db.php";

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$query = mysqli_query($connect, 
    "SELECT * FROM users WHERE email='$email'"
);

if (mysqli_num_rows($query) == 1) {
    $user = mysqli_fetch_assoc($query);

    if (password_verify($password, $user['password'])) {

    
        $_SESSION['login'] = true;
        $_SESSION['id']    = $user['id'];
        $_SESSION['email'] = $user[ 'email'];
        $_SESSION['nama']  = $user['nama'];

        header("Location: index.php");
        exit;
    }
}

header("Location: signin.php?error=1");
exit;
