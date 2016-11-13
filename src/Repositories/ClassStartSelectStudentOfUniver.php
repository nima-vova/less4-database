<?php
/**
 * Created by PhpStorm.
 * User: nima
 * Date: 13.11.16
 * Time: 22:15
 */

namespace Repositories;



class ClassStartSelectStudentOfUniver
{
    public $useConn;

    public function __construct()
    {

        $this->useConn= new Connector();

        $sql = 'SELECT * FROM Univer';

        /*$sql = 'SELECT * FROM Student WHERE  studentDepartmentId in (
          SELECT DepartmentId FROM Department WHERE DepartUniverId=\'1\')';*/

        $result = $this->useConn->getconn()->query($sql);
        echo "<form  method='get' action='index.php' >
             <input maxlength=\"30\" size=\"30\" value=\" \"name='firstNameStudentFind'>
             <select   name=\"hero\">";
        while ($row = $result->fetch()) {
            echo "       
    <option value=\"$row[0]\">$row[1]</option>";

        }
        echo"</select> <input type='submit' value='найти' name='selectFindInput'>";




    }
}