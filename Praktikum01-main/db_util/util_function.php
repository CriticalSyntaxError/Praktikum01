<?php 
   function createMySQLConnection(): PDO{
    $link = new PDO('mysql:host=localhost;dbname=pertemuan1','root','');
    $link -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $link -> setAttribute(PDO::ATTR_AUTOCOMMIT,false);
    return $link;
   } 
?>