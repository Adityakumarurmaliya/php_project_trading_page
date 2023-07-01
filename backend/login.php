<?php
session_start();
require_once './connection.php';
print_r($_POST);
$result = mysqli_query($con, "select * from users where email='$_POST[email]' and password='$_POST[password]'");
if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $_POST['email'];
    echo '<script>window.location.href="../dashboard.php"</script>';
} else
    echo '<script>window.location.href="../index.html"</script>';
