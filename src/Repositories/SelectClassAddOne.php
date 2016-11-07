<?php
namespace Repositories;



class SelectClassAddOne
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


        $idUni= @$_REQUEST['idUniv'];

     $nameUniver= @$_REQUEST['nameUniv'];
        $nameSity= @$_REQUEST['nameCity'];
        $nameSite= @$_REQUEST['nameSite'];

        $sql="INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('$nameUniver','$nameSity','$nameSite')";
       
        if ($conn->query($sql) === TRUE) {
            echo "Table Univer add one   successfully<br>";
        } else {
            echo "Error Univer add one  " . $conn->error;
        }

        $conn->close();

    }



}
