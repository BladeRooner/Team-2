<?php
include('connectToDatabase.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
// Define $username and $password
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = hash('sha256', $password);

        $query = mysqli_query($conn, "select role from users where password='$hashed_password' AND username='$email'");
        $rows = mysqli_num_rows($query);
        $roles=mysqli_fetch_row($query);
        $privilege= $roles[0] ;

        echo $privilege;

        if ($rows == 1) {
            $_SESSION['login_user'] = $email; // Initializing Session
            $_SESSION['login_user_role'] = $privilege;

            header("location: portal.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
    }
}
?>