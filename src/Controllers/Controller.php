<?php

namespace Controllers;

use Repositories\SelectClassChengStud;
use Repositories\TestClass;
use Repositories\AddClass;
use Repositories\SelectClass;
use Repositories\SelectClassCheng;
use Repositories\SelectClassChengCafedr;


class Controller
{
    public $repository;
    public $repositoryAdd;
    public $repositorySelectUnivers;
    public $repositorySelectUniversCheng;
    public $repositoryChengCafedr;
    public $repositoryChengStud;
    public $repositorySelecCafedr;
    public $repositorySelecStud;
    public $repositorySelecHomeWork;

    public function createBD()
    {
        //echo "hello Controller";
        $this->repository = new  TestClass();
    }

    public function addBD()
    {
        //echo "hello Controller";

        $this->repositoryAdd = new  AddClass();
        $this->repositoryAdd->addDataAllTables();
    }
    public function funcFrontSelectUnivers()
    {
        //echo "hello Controller";

        $this->repositorySelectUnivers = new  SelectClass();
        $this->repositorySelectUnivers->funcSelectUniver();
    }

    // cheng table univer
    public function testGo()
    {
        //start class SelectClassCheng -(sect update univer)
        //index.php?idUniv=13&nameUniv=ЧДБК+&nameCity=Черкаси+&nameSite=www.cdbk.ua+&cheng
        $this->repositorySelectUniversChen = new  SelectClassCheng($_GET['idUniv'], $_GET['nameUniv'], $_GET['nameCity'], $_GET['nameSite'], $_GET['chengUniver']);

        //reload page of cheng univer
        $this->repositorySelectUnivers = new  SelectClass();
        $this->repositorySelectUnivers->funcSelectUniver();
    }

    public function chengCafedr()
    {
        $this->repositoryChengCafedr = new  SelectClassChengCafedr($_GET['DepartmentId'], $_GET['nameDepartmen'], $_GET['DepartUniverId'], $_GET['chengDepart']);

        $this->repositorySelecCafedr = new  SelectClass();
        $this->repositorySelecCafedr->funcSelectCafedr();
    }

  /*  public function addOneUniver()
    {
        $this->repositoryaddOneUniver = new  SelectClassAddOne();

        // echo "gfgfgf";
    }
*/

    public function funcFrontSelecCafedr()
    {
        $this->repositorySelecCafedr = new  SelectClass();
        $this->repositorySelecCafedr->funcSelectCafedr();
    }

    public function funcFrontSelecStud()
    {
        $this->repositorySelecStud = new  SelectClass();
        $this->repositorySelecStud->funcSelectStudent();
    }

    public function chengStud()
    {
        $this->repositoryChengStud = new  SelectClassChengStud($_GET['StudentId'], $_GET['firstNameStudent'], $_GET['lastNameStudent'], $_GET['emailStudent'],
            $_GET['telStudents'], $_GET['studentDepartmentId'], $_GET['chengStudent']);

        $this->repositorySelecStud = new  SelectClass();
        $this->repositorySelecStud->funcSelectStudent();
    }

    public function funcFrontSeleсHomeWork()
    {
        $this->repositorySelecHomeWork = new  SelectClass();
        $this->repositorySelecHomeWork->funcSelectHomeWork();
    }
}
