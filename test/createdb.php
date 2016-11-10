<?php
//echo "hello";

$servername = 'localhost';
$username = 'root';
$password = 'julia';
$dbname = 'gh_less4';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

$sql = 'CREATE TABLE Univer (
UniverId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameUniver VARCHAR(30) NOT NULL,
cityUniver VARCHAR(30) NOT NULL,
siteUniver VARCHAR(50))';

if ($conn->query($sql) === true) {
    echo 'Table Univer created successfully<br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE Department (
DepartmentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDepartmen VARCHAR(30) NOT NULL,
DepartUniverId INT(6) REFERENCES Univer(UniverId)  ON DELETE CASCADE
)';

if ($conn->query($sql) === true) {
    echo 'Table Department created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE Student (
StudentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameStudent VARCHAR(30) NOT NULL,
lastNameStudent VARCHAR(30) NOT NULL,
emailStudent VARCHAR(30) NOT NULL,
telStudents VARCHAR(30) NOT NULL,
studentDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)';

if ($conn->query($sql) === true) {
    echo 'Table Student created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE Teacher (
TeacherId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstNameTeacher VARCHAR(30) NOT NULL,
lastNameTeacher VARCHAR(30) NOT NULL,
teacherDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE,
teacherStudents VARCHAR(30) NOT NULL
)';

if ($conn->query($sql) === true) {
    echo 'Table Teacher created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE Discipline (
DisciplineId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDisciplin VARCHAR(30) NOT NULL,
DisciplinDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)';

if ($conn->query($sql) === true) {
    echo 'Table Disciplin created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE Discipline (
DisciplineId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameDisciplin VARCHAR(30) NOT NULL,
DisciplinDepartmentId INT(6) REFERENCES Department(DepartmentId)  ON DELETE CASCADE
)';

if ($conn->query($sql) === true) {
    echo 'Table Disciplin created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$sql = 'CREATE TABLE HomeWork (
HomeWorkId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nameHomeWork VARCHAR(30) NOT NULL,
HomeWorkDisciplineId INT(6) REFERENCES Discipline(DisciplineId)  ON DELETE CASCADE,
passedHomeWork BOOLEAN NOT NULL
)';

if ($conn->query($sql) === true) {
    echo 'Table HemeWork created successfully <br>';
} else {
    echo 'Error creating table: '.$conn->error;
}

$conn->close();
?>

