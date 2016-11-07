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
        $servername = 'localhost';
        $username = 'root';
        $password = 'julia';
        $dbname = 'gh_less4';
        $this->conn = new \MySQLi($servername, $username, $password, $dbname);
        if (!$this->conn) {
            return false;
            //throw new Exception('Error connecting to the database');
        }
    }
    public function getconn()
    {
        return $this->conn;
    }
}
