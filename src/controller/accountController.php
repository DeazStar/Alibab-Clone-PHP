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
            $userId = $_SESSION['user_id']; // Assuming you have a user ID stored in the session

            // Connect to the database and update the user profile
            $db = new DataBase();
            $connection = $db->getInstance();

            // Update the user profile in the database and fetch the mobile number and email
            $sql = "UPDATE users SET profile_picture = :profilePicture WHERE id = :userId RETURNING mobile_number, email";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':profilePicture', $targetFile);
            $stmt->bindParam(':userId', $userId);

            if ($stmt->execute()) {
                // User profile updated successfully
                $_SESSION['error'] = "<p class='text-center' style='max-width: 70%' style='font-size: 95%; 'style='min-width: 50%' alert-dismissible> profile updated successfully .</p>";

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['mobileNumber'] = $row['mobile_number'];
                $_SESSION['email'] = $row['email'];

                header("Location: ../../public/account.php");
            } else {
                // Error updating user profile
            }

            // Close the statement and database connection
            $stmt = null;
            $db = null;
        } else {
        }
    } else {
    }
}
?>
