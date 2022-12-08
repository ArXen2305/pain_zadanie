<?php

    require_once('db.php');

    if(isset($_POST['sub'])) {

        if (empty($_POST['user_login']) || empty($_POST['c_pass']) || empty($_POST['new_pass1']) || empty($_POST['new_pass2']))
        {
            header('Location: admin.php');
            exit();
        }

        if ($_POST['new_pass1'] == $_POST['new_pass2'])
        {
            $cpass = $_POST['c_pass'];
            $log = $_POST['user_login'];
            global $conn;
            
            $c_pass = "SELECT password FROM user WHERE login = '$log'";
            
            foreach ($conn->query($c_pass) as $row) {
                $db_pas = $row['password'];
            }
            
            $res = password_verify($cpass, $db_pas);

            if ($res) {
                    
                $new_password = $_POST['new_pass1'];
                $bestpass = password_hash($new_password, PASSWORD_DEFAULT);

                $sql = "UPDATE User SET password='$bestpass' WHERE login='$log'";
                
                if (mysqli_query($conn, $sql)) {
                    header('Location: pass_ch_resp/pass_changed.php');
                }
                else {
                    header('Location: pass_ch_resp/sth_err.php');
                }

                mysqli_close($conn);

            }
            else {
                header('Location: pass_ch_resp/inc_logs.php');
            }
        }
        else {
            header('Location: pass_ch_resp/diff_pass.php');
        }
    }

?>