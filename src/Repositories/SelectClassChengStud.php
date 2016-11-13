<?php

namespace Repositories;

class SelectClassChengStud
{
    public $useConn;
    public function __construct($StudentId, $firstNameStudent, $lastNameStudent, $emailStudent, $telStudents, $studentDepartmentId, $chengStudent)
    {
        echo $StudentId;
        $this->useConn = new Connector();

        if ($chengStudent == 'редагувати') {
            $this->useConn->getconn()->exec("UPDATE Student SET firstNameStudent='$firstNameStudent', lastNameStudent='$lastNameStudent', emailStudent='$emailStudent', telStudents='$telStudents', studentDepartmentId='$studentDepartmentId' WHERE StudentId='$StudentId'");
        }

        if ($chengStudent == 'додати запис') {
            $this->useConn->getconn()->exec("INSERT INTO Student (firstNameStudent, lastNameStudent, emailStudent, telStudents, studentDepartmentId) VALUES ('$firstNameStudent', '$lastNameStudent', '$emailStudent', '$telStudents', '$studentDepartmentId')");
        }

        if ($chengStudent == 'видалити') {
            $this->useConn->getconn()->exec("DELETE  FROM Student  WHERE StudentId='$StudentId'");
        }
    }
}
