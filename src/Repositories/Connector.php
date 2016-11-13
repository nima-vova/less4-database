<?php

namespace Repositories;

class Connector
{
    public $conn;
    /**
     * StudentsRepository constructor.
     * Initialize the database connection with sql server via given credentials.
     *
     * @param $databasename
     * @param $user
     * @param $pass
     */
    public function __construct()
    {
       // $servername = 'localhost';
        $username = 'root';
        $password = 'julia';
        $dbname = 'gh_less4';


        $this->conn= new \PDO('mysql:host=localhost;',$username, $password);
        if ($this->conn->prepare('USE gh_less4')->execute()){
            $this->conn = new \PDO('mysql:host=localhost;dbname=' . $dbname , $username, $password);
        }


        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        if (!$this->conn) {
            return false;
        }
       /* $connTest = new \MySQLi($servername, $username, $password);
        if (mysqli_select_db( $connTest, $dbname)) {
        $this->conn = new \MySQLi($servername, $username, $password, $dbname);


        } else {
        $this->conn = new \MySQLi($servername, $username, $password);

        }

        if (!$this->conn) {
            return false;
        }
       */
        /*$this->conn = new \MySQLi($servername, $username, $password, $dbname);
        if (!$this->conn) {
            return false;
            //throw new Exception('Error connecting to the database');
        } */
    }
    public function getconn()
    {
        return $this->conn;
    }
}
