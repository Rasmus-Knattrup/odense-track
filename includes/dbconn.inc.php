<?php
/**
 * class DBH(Database handler)
 * 
 * @property $db_host
 * @property $db_user
 * @property $db_password
 * @property $db_name
 * @property $db_charset
 * @method db_connect()
 */
class DBH {

    // Properties
    /**
     * Database cerdentials
     *
     * @var $db_host
     * @var $db_user
     * @var $db_password
     * @var $db_name
     * @var $db_charset
     */
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_password = '';
    private $db_name = 'odense_track';
    private $db_charset = 'utf8mb4';

    // Methods
    /**
     * Connection to database
     *
     * @method db_connect()
     * @return object $db_conn
     */
    protected function db_connect() {
        
        // Data source name
        $this->dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name . ';charset=' . $this->db_charset;

        // Makes a connection to the database
        $this->db_conn = new PDO( $this->dsn, $this->db_user, $this->db_password );

        // When fetching an SQL row it turn into an object
        $this->db_conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );
        // Gives the Error reporting atribute and throws exeptions
        $this->db_conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        // Returns the connection
        return $this->db_conn;

    }
}