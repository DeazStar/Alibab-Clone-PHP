<?php
require_once "../core/pdo.php";
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Verify user credentials
    $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email and password = :password" );
    $stmt->execute(array(
        ':email'=>$email,
        ':password'=>md5($password)
    ));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        
        
        $_SESSION['id'] = $user['id'];

        // Redirect to dashboard
        header('Location: ../../index.html');
        exit;
    } else {
        // Invalid credentials
        $_SESSION['error'] =  'Invalid email or password';
        header('Location:../../public/signin.php');
        exit;
    }
}
$_SESSION['error'] = "all field is required";
header('Location:../../public/signin.php');
?>