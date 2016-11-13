<?php

namespace Repositories;

class SelectClassCheng
{
    public $useConn;
    public function __construct($idUniv, $nameUniv, $nameCity, $nameSite, $cheng)
    {
        echo $nameSite;
        $this->useConn = new Connector();

// Check connection

       // $idUni = @$_REQUEST['idUniv'];

       // $nameUniver = @$_REQUEST['nameUniv'];
        //$nameSity = @$_REQUEST['nameCity'];
       // $nameSite = @$_REQUEST['nameSite'];
        if ($cheng == 'редагувати') {
            $this->useConn->getconn()->exec("UPDATE Univer SET nameUniver='$nameUniv', cityUniver='$nameCity', siteUniver='$nameSite' WHERE UniverId='$idUniv'");
        }

        if ($cheng == 'додати запис') {
            $this->useConn->getconn()->exec("INSERT INTO Univer (nameUniver,cityUniver,siteUniver) VALUES ('$nameUniv','$nameCity','$nameSite')");
        }

        if ($cheng == 'видалити') {
            $this->useConn->getconn()->exec("DELETE  FROM Univer  WHERE UniverId='$idUniv'");
        }
    }
}
