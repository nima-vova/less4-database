<?php
namespace Repositories;



class SelectClassDelUniver
{





    public  function __construct()
    {

        $this->useConn= new Connector;
        $this->useConn->getconn();

        $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $idUniv= @$_REQUEST['idUniv'];


        $sql = "DELETE  FROM Univer  WHERE UniverId='$idUniv'";
        if ($conn->query($sql) === TRUE) {
            echo "Table Univer delete  successfully<br>";
        } else {
            echo "Error Univer delete table: " . $conn->error;
        }

        $conn->close();

    }



}
