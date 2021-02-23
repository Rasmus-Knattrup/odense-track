<?php
// class DBH (Database handler)
require_once 'dbconn.inc.php';

/**
 * class Login (subclass to DBH)
 * 
 * @property $conn
 * @method __construct()
 * @method login( string $username, string $password )
 * @method signup( string $name, string $username, string $password, string $validPassword, string $email )
 */
class Login extends DBH {

    // Properties
    /**
     * Connection to database
     *
     * @var $conn
     */
    private $conn;

    // Methods
    /**
     * Sets $conn to db_connect()
     *
     * @method __construct()
     * @return void
     */
    function __construct() {

        $this->conn = $this->db_connect();

    }

    /**
     * Login system
     *
     * @method login( @param, @param )
     * @param string $username
     * @param string $password
     * 
     * @return void
     */
    public function login( $username, $password ) {

        // Checks if there was an empty input, if so an exception is thrown
        if ( empty( $username ) || empty( $password ) ) {
            throw new Exception("Tom input");
        }

        // SQL statement to find the user
        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        // Checks if the user exists, if not an exception is thrown
        if ( $this->stmt->rowCount() === 0 ) {
            throw new Exception("Bruger eksistere ikke");
        }

        // Fetches row in an object an is set in $row
        $this->row = $this->stmt->fetch();

        // Checks if password from input matches the objects "password" column...
        $this->checkpwd = password_verify( $password, $this->row->password );

        // If not an exception is trown
        if ( $this->checkpwd === false ) {
            throw new Exception("Forkert kodeord");
        }
        // If they match the user is logged in through $_SESSION
        if ( $this->checkpwd === true ) {

            $_SESSION["id"] = $this->row->id;
            $_SESSION["name"] = $this->row->name;
            $_SESSION["username"] = $this->row->username;
            
        }

    }

    /**
     * Sign up system
     *
     * @method signup( @param, @param, @param, @param, @param )
     * @param string $name
     * @param string $username
     * @param string $password
     * @param string $validPassword
     * @param string $email
     *
     * @return void
     */
    public function signup( $name, $username, $password, $validPassword, $email ) {
        
        // Checks if there was an empty input, if so an exception is thrown
        if ( empty($name ) || empty( $username ) || empty( $password ) || empty( $validPassword ) || empty( $email ) ) {
            throw new Exception("Tom input");
        }

        // SQL statement to check if the username is already taken, if so an exception is thrown
        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );
        if ( $this->stmt->rowCount() !== 0 ) {
            throw new Exception("Brugernavn er taget");
        }

        // SQL statement to check if the email is already in use, if so an exception is thrown
        $this->sql = 'SELECT * FROM users WHERE email = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $email ] );
        if ( $this->stmt->rowCount() !== 0 ) {
            throw new Exception("Email er taget");
        }

        // Checks if the user typed the password twice correctly, if not an exception
        if ( $password !== $validPassword ) {
            throw new Exception("Kodeord matcher ikke");
        }

        // Hashes the password to make it unreadable in the database
        $this->hashedpwd = password_hash($password, PASSWORD_DEFAULT);

        // Inserts the new user into the system
        $this->sql = 'INSERT INTO users (name, username, password, email) 
            VALUES ( ?, ?, ?, ? )';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $name, $username, $this->hashedpwd, $email ] );
        
        // Selects the newly inserted user
        $this->sql = 'SELECT * FROM users WHERE username = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $username ] );

        // Fetches row in an object an is set in $row
        $this->row = $this->stmt->fetch();

        // The new user is set and is logged on with $_SESSION
        $_SESSION["id"] = $this->row->id;
        $_SESSION["name"] = $this->row->name;
        $_SESSION["username"] = $this->row->username;

    }

}