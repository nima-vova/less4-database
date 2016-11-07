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
           // $row = $result->fetch_array(MYSQLI_NUM);
           // echo  $row[2];
       echo '<table>';
        while ($row = $result->fetch_row()) {
            echo "<form  method='post' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='idUniv'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[3] \" name='nameSite'></td>     
                    <td><input type=\"submit\" value='редагувати' name='cheng'></td>
                    <td><input type='submit' value='видалити' name='del'></td></tr></form> ";
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";
        }
        echo "<form  method='post' ><tr><td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameSite'></td>     
                    <td><input type='submit' value='додати запис' name='addOne'></td></tr></form>>";

        echo '</table>';

        $this->useConn->getconn()->close();
    }
    public function funcSelectCafedr()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        $sql = 'SELECT * FROM Department';

        $result = $this->useConn->getconn()->query($sql);
        // $row = $result->fetch_array(MYSQLI_NUM);
        // echo  $row[2];

        while ($row = $result->fetch_row()) {
            echo $row[0], $row[1], $row[2].'<br>';
        }
        $this->useConn->getconn()->close();
    }

    public function funcSelectStudent()
    {
        $this->useConn = new Connector();
        $this->useConn->getconn();

        $sql = 'SELECT * FROM Student';

        $result = $this->useConn->getconn()->query($sql);
        // $row = $result->fetch_array(MYSQLI_NUM);
        // echo  $row[2];

        while ($row = $result->fetch_row()) {
            echo $row[0], $row[1], $row[2] , $row[3],  $row[4], $row[5].'<br>';
        }
        $this->useConn->getconn()->close();
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
        // $row = $result->fetch_array(MYSQLI_NUM);
        // echo  $row[2];

        while ($row = $result->fetch_row()) {
            echo $row[0], $row[1], $row[2].'<br>';
        }
        $this->useConn->getconn()->close();
    }
}
