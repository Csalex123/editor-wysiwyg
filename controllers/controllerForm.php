<?php 

include ("../class/ClassInsert.php");
$objIns=new ClassInsert();
$objIns->insertDB(0,$_POST['texto']);

