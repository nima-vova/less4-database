<?php

namespace Repositories;

class SelectClassChengHomeWork
{
    public $useConn;
    public function __construct($HomeWorkId, $nameHomeWork, $HomeWorkDisciplineId, $chengHomeWork)
    {
        echo $HomeWorkId;
        $this->useConn = new Connector();

        if ($chengHomeWork == 'редагувати') {
            $this->useConn->getconn()->exec("UPDATE HomeWork SET nameHomeWork='$nameHomeWork', HomeWorkDisciplineId='$HomeWorkDisciplineId' WHERE HomeWorkId='$HomeWorkId'");
        }

        if ($chengHomeWork == 'додати запис') {
            $this->useConn->getconn()->exec("INSERT INTO HomeWork (nameHomeWork, HomeWorkDisciplineId) VALUES ( '$nameHomeWork', '$HomeWorkDisciplineId')");
        }

        if ($chengHomeWork == 'видалити') {
            $this->useConn->getconn()->exec("DELETE  FROM HomeWork  WHERE HomeWorkId='$HomeWorkId'");
        }
    }
}
