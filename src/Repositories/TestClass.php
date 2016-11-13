<?php

namespace Repositories;

class TestClass
{
    public $useConn;

    public function __construct()
    {

       // echo phpinfo();
       // $this->useConn = new Connector();

        //$conn = new \MySQLi($servername, $username, $password);
// Check connection
        //$this->useConn = new \PDO('mysql:host=localhost;','root', 'julia');
        //$this->useConn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->useConn = new Connector();

        $this->useConn->getconn()->prepare('CREATE Database gh_less4 CHARACTER SET utf8 COLLATE utf8_general_ci')->execute();

        //$this->conn = new \PDO('mysql:host=localhost;dbname=' . $dbname , $username, $password);

        //new Conector use param database $dbname

        $this->useConn = new Connector();
        $this->useConn->getconn()->prepare('CREATE TABLE Univer (
UniverId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameUniver VARCHAR(30) NOT NULL,
cityUniver VARCHAR(30) NOT NULL,
siteUniver VARCHAR(50)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci')->execute();

        $this->useConn->getconn()->prepare('CREATE TABLE Department (
DepartmentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDepartmen VARCHAR(30) NOT NULL,
DepartUniverId INT(6) REFERENCES Univer(UniverId)  ON DELETE CASCADE
)')->execute();

        $this->useConn->getconn()->prepare('CREATE TABLE Student (
StudentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameStudent VARCHAR(30) NOT NULL,
lastNameStudent VARCHAR(30) NOT NULL,
emailStudent VARCHAR(30) NOT NULL,
telStudents VARCHAR(30) NOT NULL,
studentDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)')->execute();

        $this->useConn->getconn()->prepare('CREATE TABLE Teacher (
TeacherId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameTeacher VARCHAR(30) NOT NULL,
lastNameTeacher VARCHAR(30) NOT NULL,
teacherDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)')->execute();

        $this->useConn->getconn()->prepare('CREATE TABLE Discipline (
DisciplineId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDisciplin VARCHAR(30) NOT NULL,
DisciplinDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)')->execute();

        $this->useConn->getconn()->prepare('CREATE TABLE HomeWork (
HomeWorkId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameHomeWork VARCHAR(30) NOT NULL,
HomeWorkDisciplineId INT(6) REFERENCES Discipline(DisciplineId)  ON DELETE CASCADE
)')->execute();
    }
}
