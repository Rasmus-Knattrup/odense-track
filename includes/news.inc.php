<?php
// class DBH(Database handler)
require_once 'dbconn.inc.php';

class News extends DBH {

    // Properties
    private $conn;
    private $news_date;
    private $news_date_day;
    private $news_date_month;

    // Methods
    function __construct() {

        $this->conn = $this->db_connect();

    }

    private function get_date( $date ) {

        $this->news_date_day = substr( $date, 8, -9 );

        $this->news_date_month = substr( $date, 5, -12 );
        switch ($this->news_date_month) {
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
                $this->news_date_month = "MAY";
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
                $this->news_date_month = "OCT";
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

    public function print_news() {

        $this->sql = 'SELECT * FROM news';
        $this->stmt = $this->conn->prepare( $this->sql );
        $this->stmt->execute();

        $this->row = $this->stmt->fetchAll();

        $this->row->date = $this->get_date( $this->row->date );
            
        return $this->row;

    }

    /*public function insert_news() {

    }*/

}