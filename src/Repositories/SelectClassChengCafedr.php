<?php

namespace Repositories;

class SelectClassChengCafedr
{
    public $useConn;
    public function __construct($StudentId, $firstNameStudent, $lastNameStudent, $emailStudent, $telStudents, $studentDepartmentId, $chengStudent)
    {
        echo $DepartmentId;
        $this->useConn= new Connector();



        if ($chengStudent=="редагувати") {
            $sql = "UPDATE Student SET firstNameStudent='$firstNameStudent', lastNameStudent='$lastNameStudent', emailStudent='$emailStudent', telStudents='$telStudents', studentDepartmentId='$studentDepartmentId' WHERE StudentId='$StudentId'";
            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Student update  successfully<br>';
            } else {
                echo 'Error Student update table: ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }
/*

        if ($chengDepart=="додати запис") {

            $sql = "INSERT INTO Department (nameDepartmen, DepartUniverId) VALUES ('$nameDepartmen', '$DepartUniverId')";

            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Department add one   successfully<br>';
            } else {
                echo 'ErrorDepartment add one  ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }

        if($chengDepart=="видалити") {
            $sql = "DELETE  FROM Department  WHERE DepartmentId='$DepartmentId'";
            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Univer delete  successfully<br>';
            } else {
                echo 'Error Univer delete table: ' . $conn->error;
            }

            $this->useConn->getconn()->close();

        }*/
    }
}