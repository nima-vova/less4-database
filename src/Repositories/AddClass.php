<?php

namespace Repositories;

class AddClass
{
    public $useConn;

    public function addDataAllTables()
    {
        $this->useConn = new Connector();

        $this->useConn->getconn()->exec("INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('ЧНУ','Черкаси','www.cnu.ua'), ('ЧДТУ','Черкаси','www.cdtu.ua'), ('Політех','Київ','www.politex.ua'),
      ('ЧДБК','Черкаси','www.cdbk.ua')");


        $this->useConn->getconn()->exec("INSERT INTO Department (nameDepartmen, DepartUniverId) VALUES ('Каф. фізики','1'), ('Каф. історії','2'), ('Каф. інф.тех.','3'), ('Каф. бугх-обліку','4'),
        ('Каф. Укр. мови','1'), ('Каф. економіки','2')");


        $this->useConn->getconn()->exec("INSERT INTO Student (firstNameStudent, lastNameStudent, emailStudent, telStudents, studentDepartmentId) VALUES ('Іван','Іванов','ivan@mail.ru','0968240310', '1'), 
        ('Петро','Петров','hhh@gmail.com','0930200310', '1'), ('Микола','Миколинко','mik@mail.ru','0958100010', '1'), ('Олена','Тимошенко','nimoh@gmail.com','0965550010', '1'),
        ('Вася','Васильков','vasia@mail.ru','093330310', '1'),('Іра','Антоненко','iren@gmail.com','0977730310', '1')");


        $this->useConn->getconn()->exec("INSERT INTO Teacher (firstNameTeacher, lastNameTeacher, teacherDepartmentId) VALUES ('Степан', 'Кирилюк', '1'), ('Іван', 'Іванюк', '2'),
        ('Олексій', 'Мельник', '3'), ('Марк', 'Григоренко', '2'), ('Степан', 'Пузенко', '3')");


        $this->useConn->getconn()->exec("INSERT INTO Discipline (nameDisciplin, DisciplinDepartmentId) VALUES ('Фізика-механіка','1'), ('історія укр.','2'), ('основи бугх.','4')");


        $this->useConn->getconn()->exec("INSERT INTO HomeWork (nameHomeWork, HomeWorkDisciplineId) VALUES ('Перший закон','1'), ('Другий закон','1'), ('кведи','3')");


    }
}