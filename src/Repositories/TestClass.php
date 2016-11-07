<?php
namespace Repositories;

use Repositories\Connector;

class TestClass
{

    public $useConn;

 public function __construct()
    {
        //echo "good create db";
        $servername = "localhost";
        $username = "root";
        $password = "julia";
        $dbname = "gh_less4";
        $conn = new \MySQLi($servername, $username, $password);
// Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }


     $sql ='CREATE Database gh_less4 CHARACTER SET utf8 COLLATE utf8_general_ci';

     if ($conn->query($sql) === TRUE) {
         echo "DATABASE  gh_less4 successfully<br>";
     } else {
         echo "Error creating DATABASE: " . $conn->error;
     }
     $conn->close();




     $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }


     $sql = "CREATE TABLE Univer (
UniverId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameUniver VARCHAR(30) NOT NULL,
cityUniver VARCHAR(30) NOT NULL,
siteUniver VARCHAR(50)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";



     if ($conn->query($sql) === TRUE) {
         echo "Table Univer created successfully<br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }






     $sql = "CREATE TABLE Department (
DepartmentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDepartmen VARCHAR(30) NOT NULL,
DepartUniverId INT(6) REFERENCES Univer(UniverId)  ON DELETE CASCADE
)";

     if ($conn->query($sql) === TRUE) {
         echo "Table Department created successfully <br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }



     $sql = "CREATE TABLE Student (
StudentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameStudent VARCHAR(30) NOT NULL,
lastNameStudent VARCHAR(30) NOT NULL,
emailStudent VARCHAR(30) NOT NULL,
telStudents VARCHAR(30) NOT NULL,
studentDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)";

     if ($conn->query($sql) === TRUE) {
         echo "Table Student created successfully <br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }




     $sql = "CREATE TABLE Teacher (
TeacherId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameTeacher VARCHAR(30) NOT NULL,
lastNameTeacher VARCHAR(30) NOT NULL,
teacherDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)";

     if ($conn->query($sql) === TRUE) {
         echo "Table Teacher created successfully <br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }





     $sql = "CREATE TABLE Discipline (
DisciplineId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDisciplin VARCHAR(30) NOT NULL,
DisciplinDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)";

     if ($conn->query($sql) === TRUE) {
         echo "Table Disciplin created successfully <br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }





     $sql = "CREATE TABLE HomeWork (
HomeWorkId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameHomeWork VARCHAR(30) NOT NULL,
HomeWorkDisciplineId INT(6) REFERENCES Discipline(DisciplineId)  ON DELETE CASCADE,
passedHomeWork BOOLEAN NOT NULL
)";

     if ($conn->query($sql) === TRUE) {
         echo "Table HemeWork created successfully <br>";
     } else {
         echo "Error creating table: " . $conn->error;
     }




     $conn->close();




    }







}
