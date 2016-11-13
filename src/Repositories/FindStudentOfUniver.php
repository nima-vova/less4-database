<?php

namespace Repositories;

class FindStudentOfUniver
{
    public $useConn;
    public function __construct()
    {
        $this->useConn= new Connector();

       $sql = 'SELECT * FROM Student WHERE  studentDepartmentId in (
          SELECT DepartmentId FROM Department WHERE DepartUniverId=\'1\') AND firstNameStudent REGEXP  \'(.*)тр(.*)\'';

        /*$sql = 'SELECT * FROM Student WHERE  studentDepartmentId in (
          SELECT DepartmentId FROM Department WHERE DepartUniverId=\'1\')';*/

        $result = $this->useConn->getconn()->query($sql);

        while ($row = $result->fetch()) {
            echo "<form  method='get' action='index.php' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='StudentId'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='firstNameStudent'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='lastNameStudent'></td>
                    <td><input maxlength='30' size='30' value='$row[3]' name='emailStudent'></td>   
                    <td><input maxlength='30' size='30' value='$row[4]' name='telStudents'></td>
                    <td><input maxlength='30' size='30' value='$row[5]' name='studentDepartmentId'></td>                 
                    </tr></form> ";
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
        }


    }
}