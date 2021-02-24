<?php 
// class DBH (Database handler)
require_once 'dbconn.inc.php';

class Events extends DBH {

    // Properties
    private $conn;

    // Methods
    function __construct() {

        $this->conn = $this->db_connect();

    }

    public function print_events() {

        $this->sql = "SELECT id, title, content, image, SUBSTRING(content, 1, 140) AS preview FROM events";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute();
    
        return $this->stmt->fetchAll();

    }

    /**
     * Prints a specific event article from database
     * 
     * @method read_event( @param )
     * @param int $id
     * @return object $this->stmt->fetch()
     */
    public function read_event( $id ) {

        $this->sql = "SELECT id, title, content, image FROM events WHERE id = ?";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $id ] );

        if ( $this->stmt->rowCount() === 0 ) {
            header("Location: events.php");
        }

        return $this->stmt->fetch();

    }

}