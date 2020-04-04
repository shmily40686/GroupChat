<?php 
try{
     $bdd = new PDO("mysql:host=localhost;dbname=group_chat","root","");
}catch(Exception $e) {
    die("ERROR:" .$E->getMessage());
}
?>