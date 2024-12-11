<?php
    define('host', 'localhost');
    define('user', 'root');
    define('password', '');
    define('dbname', 'dbgakou');

    class Database {
        private $host = host;
        private $user = user;
        private $password = password;
        private $dbName = dbname;

        public $link;
        public $error;

        public function __construct(){
            $this->dbConnect();
        }

        public function dbConnect()
        {
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
            if (!$this->link){
                $this->error = "Database Connection Failed";
                return false;
            }
        }
    }
?>