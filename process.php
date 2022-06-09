<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO accounts(username, password) VALUES (?, ?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$username,$password]);
    if($result){
        echo 'User Account Successfully Created!';
    }else{
        echo "There seems to be a Problem Connecting to the Database";
    }    
}else{
    echo'No Data';
}