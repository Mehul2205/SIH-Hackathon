<?php
    require 'server.php';
    session_start();
    if(isset($_POST['lemail']) && isset($_POST['lpass']))
    {
        $sql="SELECT id, password, firstname, lastname from user WHERE email='".$_POST['lemail']."';";
        $result = $conn->query($sql);
        $result=$result->fetch_assoc();
        $password = md5($_POST['lpass']);
        if($result['password']=="$password")
        {
            $_SESSION['id']=$result['id'];
            $_SESSION['name']=$result['firstname'];
            $_SESSION['lastname']=$result['lastname'];
            header('Location:detail.php');
        }
        
        else{
            header('Location:index.php?invalid=True');
        }
    }

?>