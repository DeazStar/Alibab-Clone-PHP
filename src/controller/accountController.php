<?php
session_start();
require_once "../core/Database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === UPLOAD_ERR_OK) {
        $tempFile = $_FILES['profilePicture']['tmp_name'];
        $profile = $_FILES['profilePicture']['name'];
        $targetFile = "../../public/assets/images/" . basename($profile);

        // Move the uploaded file to the target location
        if (move_uploaded_file($tempFile, $targetFile)) {
            $_SESSION['profilePicture'] = $targetFile;

            // Perform any other necessary actions, such as updating the user profile in the database
            $userId = $_SESSION['id']; // Assuming you have a user ID stored in the session

            // Connect to the database
            $db = new DataBase();
            $connection = $db->getInstance();

            // Combine the update and select queries into a single SQL statement
            $sql = "
                UPDATE user SET profile_picture = '$targetFile' WHERE id = $userId;
                SELECT phoneNumber, email FROM users WHERE id = $userId;
            ";

            // Execute the combined SQL statement
            $stmt = $connection->prepare($sql);
            $stmt->execute();

            // Process the results
            
                if ($stmt->rowCount() > 0) {
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['mobileNumber'] = $row['mobile_number'];
                    $_SESSION['email'] = $row['email'];
                }
            

            // Close the statement and database connection
            $stmt = null;
            $db = null;

            // Redirect to account page
            $_SESSION['error'] = "<p class='text-center' style='max-width: 70%' style='font-size: 95%; 'style='min-width: 50%' alert-dismissible> profile updated successfully .</p>";
            header("Location: ../../public/account.php");
            exit();
        }}
}