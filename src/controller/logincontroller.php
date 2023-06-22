<?php
require_once "../core/Database.php";
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = "SELECT * FROM user WHERE email = :email and password = :password";
    $params = [':email'=>$email, ':password'=>md5($password)];
    $db = new Database();
    $user = $db->read($stmt , $params);
    if (is_array($user) && count($user) > 0) {
        
        
        $_SESSION['id'] = $user['id'];

        // Redirect to dashboard
        header('Location: ../../public/index.php');
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