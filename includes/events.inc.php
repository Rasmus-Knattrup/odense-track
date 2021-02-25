<?php 
// class DBH (Database handler)
require_once 'dbconn.inc.php';

/**
 * class Events (subclass of DBH)
 */
class Events extends DBH {

    // Properties
    /**
     * Connection to database
     *
     * @var object $conn
     */
    private $conn;
    /*private $target_dir = "img/";
    private $target_file = $this->target_dir . basename($_FILES['image']["name"]);*/

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

    private function get_image( $image ) {

        //IMAGE HANDLER
        $this->target_dir = "img/";
        $this->target_file = $this->target_dir . basename( $image );
              
        // Select file type
        $this->imageFileType = strtolower( pathinfo( $this->target_file, PATHINFO_EXTENSION ) );
              
        // Valid file extensions
        $this->extensions_arr = array( "jpg", "jpeg", "png" );
              
        // Check extension
        if( in_array( $this->imageFileType, $this->extensions_arr ) ){
               
            // Insert record
            $this->sql = 'INSERT INTO images ( name ) VALUES( ? )';
            $this->stmt = $this->conn->prepare( $this->sql );
            $this->stmt->execute( [ $image ] );
                
            // Upload file
            $this->move_uploaded_file( $image, $this->target_file );
        
            //Catch image id and name
            $this->sql = 'SELECT * FROM images WHERE name = ?';
            $this->stmt = $this->conn->prepare( $this->sql );
            $this->stmt->execute( [ $image ] );

            return $this->stmt->fetch();
        
        }
        // Error if extension doesn't match
        else {
            throw new Exeption('test');
        }

    }

    public function upload_event( $id, $title, $content, $image ) {



    }

    public function insert_event( $title, $content, $image ) {
        
        if ( empty( $title ) || empty( $content ) empty( $image ) ) {
            throw new Exception("Tomt input");
        }
        if () {
            
        }

        $this->sql = "INSERT INTO news (title, content) VALUES ( ?, ? )";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $title, $content ] );

    }

}