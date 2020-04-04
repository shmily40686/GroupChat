<?php
    include 'classes.php';
    $user = new user();
    if(isset($_POST['UserName']) && isset($_POST['Email']) && isset($_POST['UserPassword'])) {
        $user -> setUserName($_POST['UserName']);
        $user -> setUserMail($_POST['Email']);
        $user -> setUserPassword($_POST['UserPassword']);
        $user -> InsertUser(); 
    }
?>