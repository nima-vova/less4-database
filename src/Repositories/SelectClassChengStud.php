<?php

namespace Repositories;

class SelectClassChengStud
{
    public $useConn;
    public function __construct($StudentId , $firstNameStudent, $lastNameStudent, $emailStudent, $telStudents, $studentDepartmentId, $chengStudent)
    {
        echo $StudentId;
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


        if ($chengStudent=="додати запис") {

            $sql = "INSERT INTO Student (firstNameStudent, lastNameStudent, emailStudent, telStudents, studentDepartmentId) VALUES ('$firstNameStudent', '$lastNameStudent', '$emailStudent', '$telStudents', '$studentDepartmentId')";

            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Student add one   successfully<br>';
            } else {
                echo 'Error Student add one  ' . $this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }

        if($chengStudent=="видалити") {
            $sql = "DELETE  FROM Student  WHERE StudentId='$StudentId'";
            if ($this->useConn->getconn()->query($sql) === true) {
                echo 'Table Student delete  successfully<br>';
            } else {
                echo 'Error Student delete table: ' .$this->useConn->getconn()->error;
            }

            $this->useConn->getconn()->close();
        }
    }
}