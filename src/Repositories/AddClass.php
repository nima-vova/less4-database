<?php

namespace Repositories;

class AddClass
{
    public function addDataAllTables()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'julia';
        $dbname = 'gh_less4';
        $conn = new \MySQLi($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die('Connection failed: '.$conn->connect_error);
        }

        $sql = "INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('ЧНУ','Черкаси','www.cnu.ua'), ('ЧДТУ','Черкаси','www.cdtu.ua'), ('Політех','Київ','www.politex.ua'),
      ('ЧДБК','Черкаси','www.cdbk.ua')";

        if ($conn->query($sql) === true) {
            echo 'Table Univer INSERT  successfully<br>';
        } else {
            echo 'Error Univer INSERT table: '.$conn->error;
        }

        $sql = "INSERT INTO Department (nameDepartmen, DepartUniverId) VALUES ('Каф. фізики','1'), ('Каф. історії','2'), ('Каф. інф.тех.','3'), ('Каф. бугх-обліку','4'),
        ('Каф. Укр. мови','1'), ('Каф. економіки','2')";

        if ($conn->query($sql) === true) {
            echo 'Table Department INSERT  successfully<br>';
        } else {
            echo 'Error Department INSERT table: '.$conn->error;
        }

        $sql = "INSERT INTO Student (firstNameStudent, lastNameStudent, emailStudent, telStudents, studentDepartmentId) VALUES ('Іван','Іванов','ivan@mail.ru','0968240310', '1'), 
        ('Петро','Петров','hhh@gmail.com','0930200310', '1'), ('Микола','Миколинко','mik@mail.ru','0958100010', '1'), ('Олена','Тимошенко','nimoh@gmail.com','0965550010', '1'),
        ('Вася','Васильков','vasia@mail.ru','093330310', '1'),('Іра','Антоненко','iren@gmail.com','0977730310', '1')";

        if ($conn->query($sql) === true) {
            echo 'Table  Student  INSERT successfully<br>';
        } else {
            echo 'Error Student INSERT table: '.$conn->error;
        }

        $sql = "INSERT INTO Teacher (firstNameTeacher, lastNameTeacher, teacherDepartmentId) VALUES ('Степан', 'Кирилюк', '1'), ('Іван', 'Іванюк', '2'),
        ('Олексій', 'Мельник', '3'), ('Марк', 'Григоренко', '2'), ('Степан', 'Пузенко', '3')";

        if ($conn->query($sql) === true) {
            echo 'Table   Teacher INSERT successfully<br>';
        } else {
            echo 'Error Teacher INSERT table: '.$conn->error;
        }

        $sql = "INSERT INTO Discipline (nameDisciplin, DisciplinDepartmentId) VALUES ('Фізика-механіка','1'), ('історія укр.','2'), ('основи бугх.','4')";

        if ($conn->query($sql) === true) {
            echo 'Table   Discipline INSERT successfully<br>';
        } else {
            echo 'Error Discipline INSERT table: '.$conn->error;
        }

        $sql = "INSERT INTO HomeWork (nameHomeWork, HomeWorkDisciplineId, passedHomeWork) VALUES ('Перший закон','1', '1'), ('Другий закон','1', '1'), ('кведи','3', '0')";

        if ($conn->query($sql) === true) {
            echo 'Table   HomeWork INSERT successfully<br>';
        } else {
            echo 'Error HomeWork INSERT table: '.$conn->error;
        }

        $conn->close();
    }
}
