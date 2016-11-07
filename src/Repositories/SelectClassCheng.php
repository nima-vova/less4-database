<?php

namespace Repositories;

class SelectClassCheng
{
    public function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'julia';
        $dbname = 'gh_less4';

        $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die('Connection failed: '.$conn->connect_error);
        }

        $idUni = @$_REQUEST['idUniv'];

        $nameUniver = @$_REQUEST['nameUniv'];
        $nameSity = @$_REQUEST['nameCity'];
        $nameSite = @$_REQUEST['nameSite'];
        $sql = "UPDATE Univer SET nameUniver='$nameUniver', cityUniver='$nameSity', siteUniver='$nameSite' WHERE UniverId='$idUni'";
        if ($conn->query($sql) === true) {
            echo 'Table Univer update  successfully<br>';
        } else {
            echo 'Error Univer update table: '.$conn->error;
        }

        $conn->close();
    }
}
