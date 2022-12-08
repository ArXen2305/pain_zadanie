<?php

    require_once('db.php');

    if(isset($_POST['sub'])) {

        if (empty($_POST['user_login']) || empty($_POST['new_age']) || empty($_POST['c_pass']))
        {
            header('Location: ?ch_log.php');
            exit();
        }
        else {
            $log = $_POST['user_login'];
            $new_age = $_POST['new_age'];
            $cpass = $_POST['c_pass'];
            global $conn;
        
            $c_pass = "SELECT password FROM user WHERE login = '$log'";
            
            foreach ($conn->query($c_pass) as $row) {
                $db_pas = $row['password'];
            }
            
            $res = password_verify($cpass, $db_pas);

            if ($res) {
                    
                $new_age = $_POST['new_age'];

                $sql = "UPDATE User SET age='$new_age' WHERE login='$log'";
                
                if (mysqli_query($conn, $sql)) {
                    header('Location: age_ch_resp/age_changed.php');
                }
                else {
                    header('Location: age_ch_resp/sth_err.php');
                }

                mysqli_close($conn);

            }
            else {
                header('Location: age_ch_resp/inc_logs.php');
            }
        }
        
    }

?>