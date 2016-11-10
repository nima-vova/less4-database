<?php

namespace Repositories;


class SelectClassCheng
{
    public $useConn;
    public function __construct($idUniv, $nameUniv, $nameCity, $nameSite, $cheng)
    {
        echo $nameSite;
        $this->useConn= new Connector();


// Check connection


       // $idUni = @$_REQUEST['idUniv'];

       // $nameUniver = @$_REQUEST['nameUniv'];
        //$nameSity = @$_REQUEST['nameCity'];
       // $nameSite = @$_REQUEST['nameSite'];
        if ($cheng=="редагувати") {
            $sql = "UPDATE Univer SET nameUniver='$nameUniv', cityUniver='$nameCity', siteUniver='$nameSite' WHERE UniverId='$idUniv'";
            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Univer update  successfully<br>';
            } else {
                echo 'Error Univer update table: ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }

        if ($cheng=="додати запис") {

            $sql = "INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('$nameUniv','$nameCity','$nameSite')";

            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Univer add one   successfully<br>';
            } else {
                echo 'Error Univer add one  ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }

       if($cheng=="видалити") {
           $sql = "DELETE  FROM Univer  WHERE UniverId='$idUniv'";
           if ($this->useConn->getconn()->query($sql) === true) {
               echo 'Table Univer delete  successfully<br>';
           } else {
               echo 'Error Univer delete table: ' . $conn->error;
           }

           $this->useConn->getconn()->close();
       }
    }
}
