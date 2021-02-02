<?php
require_once 'dbconn.inc.php';

class Login extends DBH {

    // Properties
    private $conn;

    // Methods
    function __construct() {

        $this->conn = $this->db_connect();

    }

    public function login( $username, $password ) {

        if ( empty( $username ) && empty( $password ) ) {
            throw new Exception("Empty input");
        }

        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        if ( $this->stmt->rowCount() === 0 ) {
            throw new Exception("User doesn't exist");
        }

        $this->row = $this->stmt->fetch();
        $this->checkpwd = password_verify( $password, $this->row->password );

        if ( $this->checkpwd === false ) {
            throw new Exception("Wrong password");
        }

        if ( $this->checkpwd === true ) {

            $_SESSION["id"] = $this->row->id;
            $_SESSION["name"] = $this->row->name;
            $_SESSION["username"] = $this->row->username;
            
        }

    }

}