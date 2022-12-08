<?php 
    require_once("db.php"); 
    
    session_start();
	
    if (empty($_POST["log"]) || empty($_POST["pass1"])) 
    {
        header('Location: login_form.php');
        exit();
    }
    else 
    {
        $log = $_POST['log'];
        $pass = $_POST['pass1'];

        $c_logs = "SELECT password FROM user WHERE login = '$log'";
        
        foreach ($conn->query($c_logs) as $row) {
            $db_pas = $row['password'];
        }

        $res = password_verify($pass, $db_pas);

        if ($res) 
        {
            $_SESSION['logedin'] = true;
            $_SESSION['user'] = $log;
            $_SESSION['password'] = $pass;
            header('Location: admin.php');
        }
        else {
            header('Location: login_form.php');
        }

    }
	
?>
