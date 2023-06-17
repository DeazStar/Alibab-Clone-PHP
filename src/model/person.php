<?php

    class User {
        private $firstName;
        private $lastName;
        private $email;
        private $password;
        private $country;
        private $phoneNumber;
        private $companyName;
        private $tradeRole;

        public function __construct($firstName, $lastName , $email, $password, $country , $phoneNumber ,$companyName, $tradeRole ) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->country = $country;
            $this->phoneNumber = $phoneNumber;
            $this->companyName = $companyName;
            $this->tradeRole = $tradeRole;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        public function setLastName($lastName) {
             $this->lastName = $lastName;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function setCountry($country) {
            $this->country = $country;
        }

        

        public function setPhoneNumber($phoneNumber) {
            $this->phoneNumber = $phoneNumber;
        }

        public function setCompanyName($companyName){
            $this->companyName = $companyName;
        }

        public function setTradeRole($tradeRole) {
            $this->tradeRole = $tradeRole;
        }


        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }
        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getCountry() {
            return $this->country;
        }


        public function getPhoneNumber() {
            return $this->phoneNumber;
        }

        public function getTradeRole() {
            return $this->tradeRole;
        }
        
        public function getCompanyName() {
            return $this->companyName;
        }

    }

?>