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

    /**
     * Prints all events from database
     * 
     * @method event_news()
     * @return object $this->stmt->fetchAll()
     */
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

    /**
     * Takes image files and uploads them to the site
     *
     * @method get_image( @param )
     * @param  array $image
     * @return object $this->stmt->fetch()
     */
    private function get_image( $image ) {

        $this->sql = 'SELECT * FROM images WHERE name = ?';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $image['name'] ] );

        if ( $this->stmt->rowCount() ==! 0 ) {
            return $this->stmt->fetch();
        }

        //IMAGE HANDLER
        $this->target_dir = "img/";
        $this->target_file = $this->target_dir . basename( $image["name"] );
              
        // Select file type
        $this->imageFileType = strtolower( pathinfo( $this->target_file, PATHINFO_EXTENSION ) );
              
        // Valid file extensions
        $this->extensions_arr = array( "jpg", "jpeg", "png" );
              
        // Check extension
        if( in_array( $this->imageFileType, $this->extensions_arr ) ){
               
            // Insert record
            $this->sql = 'INSERT INTO images ( name ) VALUES( ? )';
            $this->stmt = $this->conn->prepare( $this->sql );
            $this->stmt->execute( [ $image["name"] ] );
                
            // Upload file
            move_uploaded_file( $image["tmp_name"], $this->target_file );
        
            //Catch image id and name
            $this->sql = 'SELECT * FROM images WHERE name = ?';
            $this->stmt = $this->conn->prepare( $this->sql );
            $this->stmt->execute( [ $image["name"] ] );

            return $this->stmt->fetch();
        
        }
        // Error if extension doesn't match
        else {
            throw new Exeption('Forkert billede type');
        }

    }

    /**
     * Edits an event article from database
     * 
     * @method update_news( @param, @param, @param, @param )
     * @param int $id
     * @param string $title
     * @param string $content
     * @param array $image
     * @return void
     */
    public function update_event( $id, $title, $content, $image ) {

        if ( empty( $title ) || empty( $content ) ) {
            throw new Exception("Tomt input");
        } 

        $this->objImage = $this->get_image( $image );

        $this->sql = "UPDATE events SET title = ?, content = ?, imageid = ?, image = ? WHERE id = ?";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $title, $content, $this->objImage->id, $this->objImage->name, $id ] );

    }

    /**
     * Inserts a new event article to the database
     * 
     * @method insert_event( @param, @param, @param )
     * @param string $title
     * @param string $content
     * @param array $image
     * @return void
     */
    public function insert_event( $title, $content, $image ) {
        
        if ( empty( $title ) || empty( $content ) ) {
            throw new Exception("Tomt input");
        }

        if ( empty( $image ) ) {
            $this->image = 'kalender.png';
            $this->id = 1;
        }
        else {
            $this->objImage = $this->get_image( $image );
            $this->image = $this->objImage->name;
            $this->id = $this->objImage->id;
        }

        $this->sql = "INSERT INTO events (title, content, imageid, image) VALUES ( ?, ?, ?, ? )";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $title, $content, $this->id, $this->image ] );

    }

}