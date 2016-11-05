<?php
namespace Repositories;



class SelectClass
{





    public  function __construct()
    {


        $servername = "localhost";
        $username = "root";
        $password = "julia";
        $dbname = "gh_less4";
        $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }




        $sql = "SELECT * FROM Univer";



            $result = $conn->query($sql);
            $row = $result->fetch_array(MYSQLI_NUM);
            echo  $row[2];






         $conn->close();


    }



}
