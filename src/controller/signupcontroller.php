<?php
    require_once "../model/person.php";
    require_once "../model/admin.php";

    session_start();
 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm-password'];
        $country = $_POST['country'];
        $phoneNumber = $_POST['phoneNumber'];
        $companyName = $_POST['companyName'];
        $verification = $_POST['verification'];
        $tradeRole = $_POST['tradeRole'];
        $agree = $_POST['agree'];

        // Validate user input
        if (empty($firstName) || empty($lastName) || empty($verification) || empty($email) || empty($password) || empty($confirmPassword) || 
            empty($country) || empty($companyName) || empty($phoneNumber) || empty($tradeRole)|| empty($agree)){
            
            $_SESSION['error'] = 'All fields are required.';
            header('Location: ../../public/signup.php');
            exit;
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] =  'Invalid email address';
            header('Location: ../../public/signup.php');
            exit;
        }
        if ($password !== $confirmPassword) {
            $_SESSION['error'] = 'Passwords do not match.';
            header('Location:../../public/signup.php');
            exit;
        }
        
        $admin = new Admin();
        if ($admin->emailExists($email)) {
            $_SESSION['error'] = 'An account with that email already exists.';
            header('Location:../../public/signup.php');
            exit;
        }        
        $user = new User($firstName, $lastName , $email, md5($password), $country,
                          $phoneNumber , $companyName , $tradeRole);

        $flag = $admin->save($user);
        if(!$flag){
    
            $_SESSION['error'] = "Error while trying to SignUp Try Again !!";
            header('Location:../../public/signup.php');
            exit;
        }
        header('Location:../../public/signin.php');
        exit;
    }
?>