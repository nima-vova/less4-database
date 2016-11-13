<?php

namespace Repositories;

class SelectClass
{
    public $useConn;

    public function funcSelectUniver()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        $sql = 'SELECT * FROM Univer';

        $result = $this->useConn->getconn()->query($sql);
        //$result->setFetchMode(PDO::FETCH_ASSOC);
       echo '<table>';
        while ($row = $result->fetch()) {
            echo "<form  method='get' action='index.php' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='idUniv'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[3] \" name='nameSite'></td>     
                    <td><input type=\"submit\" value='редагувати' name='chengUniver'></td>
                    <td><input type='submit' value='видалити' name='chengUniver'></td></tr></form> ";
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
        }
        echo '</table>';
        echo '<table>';
        echo "<form  method='get' action='index.php' ><tr>
                    <td><input maxlength='5' size='5' value='null' name='idUniv'></td>
                    <td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameSite'></td>     
                    <td><input type='submit' value='додати запис' name='chengUniver'></td></tr></form>>";

        echo '</table>';

    }
    public function funcSelectCafedr()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        $sql = 'SELECT * FROM Department';

        $result = $this->useConn->getconn()->query($sql);
        // $row = $result->fetch_array(MYSQLI_NUM);
        // echo  $row[2];


        while ($row = $result->fetch()) {
            echo "<form  method='get' action='index.php' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='DepartmentId'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='nameDepartmen'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='DepartUniverId'></td>                    
                    <td><input type=\"submit\" value='редагувати' name='chengDepart'></td>
                    <td><input type='submit' value='видалити' name='chengDepart'></td></tr></form> ";
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
        }
        echo '</table>';
        echo '<table>';
        echo "<form  method='get' action='index.php' ><tr>
                    <td><input maxlength='5' size='5' value='null' name='DepartmentId'></td>
                    <td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameDepartmen'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='DepartUniverId'></td>                      
                    <td><input type='submit' value='додати запис' name='chengDepart'></td></tr></form>>";

        echo '</table>';



        /* while ($row = $result->fetch_row()) {
            echo $row[0], $row[1], $row[2].'<br>';
        }*/
        //$this->useConn->getconn()->close();
    }

    public function funcSelectStudent()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        $sql = 'SELECT * FROM Student';

        //$sql = 'SELECT * FROM Department';

        $result = $this->useConn->getconn()->query($sql);
        // $row = $result->fetch_array(MYSQLI_NUM);
        // echo  $row[2];



        while ($row = $result->fetch()) {
            echo "<form  method='get' action='index.php' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='StudentId'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='firstNameStudent'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='lastNameStudent'></td>
                    <td><input maxlength='30' size='30' value='$row[3]' name='emailStudent'></td>   
                    <td><input maxlength='30' size='30' value='$row[4]' name='telStudents'></td>
                    <td><input maxlength='30' size='30' value='$row[5]' name='studentDepartmentId'></td>                 
                    <td><input type=\"submit\" value='редагувати' name='chengStudent'></td>
                    <td><input type='submit' value='видалити' name='chengStudent'></td></tr></form> ";
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
        }
        echo '</table>';
        echo '<table>';
        echo "<form  method='get' action='index.php' ><tr>
                    <td><input maxlength='5' size='5' value='null' name='StudentId'></td>
                    <td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='firstNameStudent'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='lastNameStudent'></td>
                    <td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='emailStudent'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='telStudents'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='studentDepartmentId'></td>                                                  
                    <td><input type='submit' value='додати запис' name='chengStudent'></td></tr></form>>";

        echo '</table>';

       // $this->useConn->getconn()->close();



    }

    public function funcSelectHomeWork()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        /*$servername = "localhost";
        $username = "root";
        $password = "julia";
        $dbname = "gh_less4";


       $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        */

        $sql = 'SELECT * FROM HomeWork';

        $result = $this->useConn->getconn()->query($sql);


        //while ($row = $result->fetch()) {
          //  echo $row[0], $row[1], $row[2].'<br>';
        //}
       // $this->useConn->getconn()->close();
        while ($row = $result->fetch()) {
        echo "<form  method='get' action='index.php' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='HomeWorkId'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='nameHomeWork'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='HomeWorkDisciplineId'></td> 
                                       
                    <td><input type=\"submit\" value='редагувати' name='chengHomeWork'></td>
                    <td><input type='submit' value='видалити' name='chengHomeWork'></td></tr></form> ";
        //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
    }
echo '</table>';
echo '<table>';
echo "<form  method='get' action='index.php' ><tr>
                    <td><input maxlength='5' size='5' value='null' name='HomeWorkId'></td>
                    <td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameHomeWork'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='HomeWorkDisciplineId'></td>
                    
                    <td><input type='submit' value='додати запис' name='chengHomeWork'></td></tr></form>>";


    }
}
