<?php

include("ClassConect.php");

class ClassInsert extends ClassConect{

    #Inserção dos dados no banco de dados
    public function insertDB($id,$text)
    {
        $b=$this->conectDB()->prepare("insert into information values(?,?)");
        $b->bindParam(1,$id,PDO::PARAM_INT);
        $b->bindParam(2,$text,PDO::PARAM_STR);
        $b->execute();
    }

    #Exibição dos dados
    public function view()
    {
        $b=$this->conectDB()->prepare("select * from information");
        $b->execute();
        return $f=$b->fetchAll(PDO::FETCH_ASSOC);
    }
}