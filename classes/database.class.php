<?php
    // set the database of the connection remember this connect used the PDO (PHP Data Object)
    class Database {
        private $server = "localhost";
        private $user_name = "root";
        private $password = "";
        private $db_name = "library_management_system2";
        
        protected function connect(){
            $dsn = "mysql:host=" . $this->server . "; dbname=" . $this->db_name;
            $pdo = new PDO($dsn, $this->user_name, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }