<?php
include_once 'dbconn.inc.php';

class Login extends DBH {

    // Properties
    private $conn;

    // Methods
    function __construct() {

        $this->conn = $this->db_connect();

    }

    public function login( $username, $password ) {

        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->stmt_init();
        $this->stmt->prepare( $this->sql );
        $this->stmt->bind_param( "s", $this->username );
        $this->stmt->execute();

        $this->stmt->fetch();
        $this->hashedpwd = $this->stmt->password;
        $this->checkpwd = password_verify( $this->password, $this->hashedpwd );

        if ( $this->checkpwd === true ) {

            $this->session_start();

            $_SESSION["id"] = $this->stmt->id;
            $_SESSION["name"] = $this->stmt->name;
            $_SESSION["username"] = $this->stmt->username;

        }

    }

}