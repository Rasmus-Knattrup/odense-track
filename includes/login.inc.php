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

        $this->row = $this->stmt->fetch();
        $this->checkpwd = password_verify( $password, $this->row->password );

        if ( $this->checkpwd === true ) {

            $_SESSION["id"] = $this->row->id;
            $_SESSION["name"] = $this->row->name;
            $_SESSION["username"] = $this->row->username;
            
        }

        $this->stmt->close();

    }

}