<?php
    session_start();
    class Login {
        private $userName = "YOUCEFCHAIMA";
        private $password = "123";

        public function check($user, $pass){
            if($this->checkPassword($pass) == true && $this->checkUsername($user) == true){
                $_SESSION['userName'] = $this->userName;
                $_SESSION['password'] = $this->password;
                return true;
            }
            return false;
        }

        protected function checkPassword($pw){
            if($pw === $this->password){
                return true;
            }
            else{
                return false;
            }
        }

        protected function checkUsername($username) {
            $user = strtoupper($this->userName);
            $username = strtoupper($username);
            $usernameLength = strlen($username);
            if ($usernameLength < 4 || $usernameLength > 20) {
                return false;
            }
            if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
                return false;
            }
            if($username !== $user){
                return false;
            }
            return true;
        }
    }