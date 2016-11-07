<?php
namespace Repositories;



class SelectClass
{





    public  function funcSelectUniver()
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




        $sql = "SELECT * FROM Univer";



            $result = $conn->query($sql);
           // $row = $result->fetch_array(MYSQLI_NUM);
           // echo  $row[2];
       echo "<table>";
        while ($row = $result->fetch_row()) {

          echo "<form  method='post' ><tr><td><input maxlength=\"5\" size=\"5\" value='$row[0]' name='idUniv'></td><td><input maxlength=\"30\" size=\"30\" value=\"$row[1] \" name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[2] \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\"$row[3] \" name='nameSite'></td>     
                    <td><input type=\"submit\" value='редагувати' name='cheng'></td>
                    <td><input type='submit' value='видалити' name='del'></td></tr></form> "  ;
            //echo $row[0], $row[1], $row[2], $row[3]  ."<br>";

        }
        echo "<form  method='post' ><tr><td></td><td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameUniv'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \" name='nameCity'></td>
                    <td><input maxlength=\"30\" size=\"30\" value=\" \"name='nameSite'></td>     
                    <td><input type='submit' value='додати запис' name='addOne'></td></tr></form>>";
                    
        echo "</table>";


        $conn->close();












    }





}
