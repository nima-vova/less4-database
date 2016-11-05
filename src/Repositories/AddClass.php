<?php
namespace Repositories;



class AddClass
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

     /* $sql="INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('ЧНУ','Черкаси','www.cnu.ua')";

        if ($conn->query($sql) === TRUE) {
            echo "Table Univer INSERT  successfully<br>";
       } else {
    echo "Error Univer INSERT table: " . $conn->error;
       }

*/


        $sql="INSERT INTO Department (nameDepartmen,DepartUniverId) VALUES ('Кафедра фізики','1')";

        if ($conn->query($sql) === TRUE) {
            echo "Table Department INSERT  successfully<br>";
        } else {
            echo "Error Univer INSERT table: " . $conn->error;
        }



        $conn->close();


    }



}
