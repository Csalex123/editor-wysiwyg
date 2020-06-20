<?php

abstract class ClassConect{

    protected function conectDB()
    {
        try{
            $con=new PDO("mysql:host=localhost;dbname=formdb","root","");
            return $con;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }
}