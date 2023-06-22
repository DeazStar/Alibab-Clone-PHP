<?php
require_once "../core/Database.php";
require_once "person.php";

class Admin {
    /**
     * Checks whether an email is already used by another user.
     *
     * @param string $email The email input from the user.
     *
     * @return bool Returns True if the email exists, else False.
     *
     * @link admin.php
     */
    public function emailExists($email) {
        $pdo = new Database();
        $stmt = "SELECT * FROM user WHERE email = :email";
        $params = [':email' => $email];
        $count = $pdo->read($stmt , $params);
        

        if ($count == false) {
            return false;
        }
        return true;
    }

    /**
     * Saves user data to the database.
     *
     * @param User $user The User object to save. The object should include the following properties:
     *                   - fullName: The user's full name.
     *                   - email: The user's email address.
     *                   - password: The user's password (hashed).
     *                   - country: The user's country of residence.
     *                   - gender: The user's gender.
     *                   - phoneNumber: The user's phone number.
     *                   - companyName: The user's company name.
     *                   - tradeRole: The user's trade role.
     *
     * @return bool Returns True if the user is added to the database, else False.
     *
     * @link #save
     */
    public function save(User $user) {
        $pdo = new Database();
        $sql = "INSERT INTO user (firstName , lastName , email, password, country,  phoneNumber, company_name, trade_role) 
                VALUES (:firstName , :lastName , :email, :password, :country,  :phoneNumber, :companyName, :tradeRole)";
        $params = [    
            ':firstName' => $user->getFirstName(),
            ':lastName' => $user->getLastName(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':country' => $user->getCountry(),
            ':phoneNumber' => $user->getPhoneNumber(),
            ':companyName' => $user->getCompanyName(),
            ':tradeRole' => $user->getTradeRole()
            ];
        $pdo->write($sql , $params);
        return True;
    }
}
?>