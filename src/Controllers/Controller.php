<?php

namespace Controllers;

use Repositories\SelectClassAddOne;
use Repositories\TestClass;
use Repositories\AddClass;
use Repositories\SelectClass;
use Repositories\SelectClassCheng;
use Repositories\SelectClassDelUniver;
use Repositories\SelectClassCafedr;

class Controller
{
public $repository;
public $repositoryAdd;
public $repositorySelectUnivers;
public $repositorySelectUniversCheng;
public $repositoryDelUniver;
public $repositoryaddOneUniver;
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


    public function testGo()
    {
        $this->repositorySelectUniversChen = new  SelectClassCheng();



       // echo "gfgfgf";


    }

    public function delUniver()
    {
        $this->repositoryDelUniver = new  SelectClassDelUniver();



        // echo "gfgfgf";


    }

    public function addOneUniver()
    {
        $this->repositoryaddOneUniver = new  SelectClassAddOne();



        // echo "gfgfgf";

    }

    public function funcFrontSelecCafedr()
    {
        $this->repositorySelecCafedr = new  SelectClass;
        $this->repositorySelecCafedr->funcSelectCafedr();


    }

    public function funcFrontSelecStud()
    {
        $this->repositorySelecStud = new  SelectClass;
        $this->repositorySelecStud->funcSelectStudent();




    }
    public function funcFrontSeleсHomeWork()
    {
        $this->repositorySelecHomeWork = new  SelectClass;
        $this->repositorySelecHomeWork->funcSelectHomeWork();




    }

}
