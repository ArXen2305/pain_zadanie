<?php

    require_once('db.php');

    if(isset($_POST['sub'])) {

        if (empty($_POST['user_login']) || empty($_POST['new_surname']) || empty($_POST['c_pass']))
        {
            header('Location: ?ch_log.php');
            exit();
        }
        else {
            $log = $_POST['user_login'];
            $new_surname = $_POST['new_surname'];
            $cpass = $_POST['c_pass'];
            global $conn;
        
            $c_pass = "SELECT password FROM user WHERE login = '$log'";
            
            foreach ($conn->query($c_pass) as $row) {
                $db_pas = $row['password'];
            }
            
            $res = password_verify($cpass, $db_pas);

            if ($res) {
                    
                $new_surname = $_POST['new_surname'];

                $sql = "UPDATE User SET surname='$new_surname' WHERE login='$log'";
                
                if (mysqli_query($conn, $sql)) {
                    header('Location: surname_ch_resp/surname_changed.php');
                }
                else {
                    header('Location: surname_ch_resp/sth_err.php');
                }

                mysqli_close($conn);

            }
            else {
                header('Location: surname_ch_resp/inc_logs.php');
            }
        }
        
    }

?>