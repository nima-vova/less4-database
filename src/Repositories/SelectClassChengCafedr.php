<?php

namespace Repositories;

class SelectClassChengCafedr
{
    public $useConn;
    public function __construct($DepartmentId, $nameDepartmen, $DepartUniverId, $chengDepart)
    {
        echo $DepartmentId;
        $this->useConn= new Connector();



        if ($chengDepart=="редагувати") {
           /* $sql = "UPDATE Department SET nameDepartmen='$nameDepartmen', DepartUniverId='$DepartUniverId' WHERE DepartmentId='$DepartmentId'";
            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Department update  successfully<br>';
            } else {
                echo 'Error Student update table: ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
           */
            $this->useConn->getconn()->exec("UPDATE Department SET nameDepartmen='$nameDepartmen', DepartUniverId='$DepartUniverId' WHERE DepartmentId='$DepartmentId'");

        }


        if ($chengDepart=="додати запис") {

            $this->useConn->getconn()->exec("INSERT INTO Department (nameDepartmen, DepartUniverId) VALUES ('$nameDepartmen', '$DepartUniverId')");


        }

        if($chengDepart=="видалити") {
            $this->useConn->getconn()->exec("DELETE  FROM Department  WHERE DepartmentId='$DepartmentId'");

            }




    }
}