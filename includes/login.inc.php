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
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        $this->stmt->fetch();
        $this->hashedpwd = $this->stmt->password;
        $this->checkpwd = password_verify( $password, $this->hashedpwd );

        if ( $this->checkpwd === true ) {

            $this->session_start();

            $_SESSION["id"] = $this->stmt->id;
            $_SESSION["name"] = $this->stmt->name;
            $_SESSION["username"] = $this->stmt->username;

        }

    }

}