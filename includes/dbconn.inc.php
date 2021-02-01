<?php
class DBH {

    // Properties
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_password = '';
    private $db_name = 'odense_track';
    private $db_charset = 'utf8mb4';

    // Methods
    protected function db_connect() {
        
        $this->dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name . ';charset=' . $this->db_charset;

        $this->db_conn = new PDO( $this->dsn, $this->db_user, $this->db_password );

        $this->db_conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );
        $this->db_conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        
        return $this->db_conn;

    }
}