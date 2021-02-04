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

        if ( empty( $username ) || empty( $password ) ) {
            throw new Exception("Tom input");
        }

        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        if ( $this->stmt->rowCount() === 0 ) {
            throw new Exception("Bruger eksistere ikke");
        }

        $this->row = $this->stmt->fetch();
        $this->checkpwd = password_verify( $password, $this->row->password );

        if ( $this->checkpwd === false ) {
            throw new Exception("Forkert kodeord");
        }

        if ( $this->checkpwd === true ) {

            $_SESSION["id"] = $this->row->id;
            $_SESSION["name"] = $this->row->name;
            $_SESSION["username"] = $this->row->username;
            
        }

    }

    public function signup( $name, $username, $password, $validPassword, $email ) {

        if ( empty($name ) || empty( $username ) || empty( $password ) || empty( $validPassword ) || empty( $email ) ) {
            throw new Exception("Tom input");
        }

        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );
        if ( $this->stmt->rowCount() !== 0 ) {
            throw new Exception("Brugernavn er taget");
        }

        $this->sql = 'SELECT * FROM users WHERE email = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $email ] );
        if ( $this->stmt->rowCount() !== 0 ) {
            throw new Exception("Email er taget");
        }

        if ( $password !== $validPassword ) {
            throw new Exception("Kodeord matcher ikke");
        }

        $this->hashedpwd = password_hash($password, PASSWORD_DEFAULT);

        $this->sql = 'INSERT INTO users (name, username, password, email) 
            VALUES ( ?, ?, ?, ? )';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $name, $username, $this->hashedpwd, $email ] );
        
        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        $this->row = $this->stmt->fetch();

        $_SESSION["id"] = $this->row->id;
        $_SESSION["name"] = $this->row->name;
        $_SESSION["username"] = $this->row->username;

    }

}