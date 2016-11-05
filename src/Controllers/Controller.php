<?php

namespace Controllers;
use Repositories\TestClass;
use Repositories\AddClass;
class Controller
{
public $repository;
public $repositoryAdd;

public function createBD()
    {
        //echo "hello Controller";
        $this->repository = new  TestClass();

    }

    public function addBD()
    {
        //echo "hello Controller";
        $this->repositoryAdd = new  AddClass();

    }

}
