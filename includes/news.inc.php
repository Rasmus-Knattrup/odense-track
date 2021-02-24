<?php
// class DBH (Database handler)
require_once 'dbconn.inc.php';

/**
 * class News (subclass to DBH)
 * 
 * @property $conn
 * @property $news_date
 * @property $news_date_day
 * @property $news_date_month
 * @method __construct()
 * @method get_date( string $date )
 * @method print_news()
 * @method insert_news( string $title, string $content )
 * @method edit_news( int $id )
 * @method update_news( $id, string $title, string $content )
 * @method read_news( int $id )
 */
class News extends DBH {

    // Properties
    /**
     * Connection to database
     *
     * @var object $conn
     */
    private $conn;

    /**
     * Credentials to get_date()
     *
     * @var string $news_date
     * @var int $news_date_day
     * @var string $news_date_month
     */
    private $news_date;
    private $news_date_day;
    private $news_date_month;

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
     * Styleizes a given date for the site
     *
     * @method get_date( @param )
     * @param string $date [Date from database]
     * @return string $this->news_date
     */
    private function get_date( $date ) {

        $this->news_date_day = substr( $date, 8, -9 );

        $this->news_date_month = substr( $date, 5, -12 );
        switch ( $this->news_date_month ) {
            case '01': 
                $this->news_date_month = "JAN";
                break;
            case '02': 
                $this->news_date_month = "FEB";
                break;
            case '03': 
                $this->news_date_month = "MAR";
                break;
            case '04': 
                $this->news_date_month = "APR";
                break;
            case '05': 
                $this->news_date_month = "MAJ";
                break;
            case '06': 
                $this->news_date_month = "JUN";
                break;
            case '07': 
                $this->news_date_month = "JUL";
                break;
            case '08': 
                $this->news_date_month = "AUG";
                break;
            case '09': 
                $this->news_date_month = "SEP";
                break;
            case '10': 
                $this->news_date_month = "OKT";
                break;
            case '11': 
                $this->news_date_month = "NOV";
                break;
            case '12': 
                $this->news_date_month = "DEC";
                break;
        }

        $this->news_date = $this->news_date_day . ' ' . $this->news_date_month;

        return $this->news_date;

    }

    /**
     * Prints all news from database
     * 
     * @method print_news()
     * @return object $this->row
     */
    public function print_news() {

        $this->sql = "SELECT id, title, content, date, SUBSTRING(content, 1, 140) AS preview FROM news ORDER BY date DESC";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute();

        $this->row = $this->stmt->fetchAll();

        foreach ( $this->row as $row ) {
            $row->date = $this->get_date( $row->date );
        }
    
        return $this->row;

    }

    /**
     * Inserts a new news article to the database
     * 
     * @method insert_news( @param, @param )
     * @param string $title
     * @param string $content
     * @return void
     */
    public function insert_news( $title, $content ) {

        if ( empty( $title ) || empty( $content ) ) {
            throw new Exception("Tomt input");
        }

        $this->sql = "INSERT INTO news (title, content) VALUES ( ?, ? )";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $title, $content ] );

    }

    /**
     * Edits a news article from database
     * 
     * @method update_news( @param, @param, @param )
     * @param int $id
     * @param string $title
     * @param string $content
     * @return void
     */
    public function update_news( $id, $title, $content ) {

        if ( empty( $title ) || empty( $content ) ) {
            throw new Exception("Tomt input");
        }

        $this->sql = "UPDATE news SET title = ?, content = ? WHERE id = ?";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $title, $content, $id ] );

    }

    /**
     * Prints a specific news article from database
     * 
     * @method read_news( @param )
     * @param int $id
     * @return object $this->stmt->fetch()
     */
    public function read_news( $id ) {

        $this->sql = "SELECT title, content, date FROM news WHERE id = ?";
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute( [ $id ] );

        if ( $this->stmt->rowCount() === 0 ) {
            header("Location: news.php");
        }

        return $this->stmt->fetch();

    }

}