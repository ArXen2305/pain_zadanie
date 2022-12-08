<?php
        require_once("db.php");

        
        if(isset($_POST['sub'])) {
            
            if (empty($_POST['log'])) {
                header('Location: reg_resp/err_log.php');
            }

            if (isset($_POST['log']) && isset($_POST['fname']) && isset($_POST['surname']) && isset($_POST['age'])) {
                $login = $_POST['log'];
                $fname = $_POST['fname'];
                $surname = $_POST['surname'];
                $age = $_POST['age'];
                if (isset($_POST['pass1']) && isset($_POST['pass2']) && $_POST['pass1'] == $_POST['pass2']) {
                    $pass = $_POST['pass1'];
                }
                else {
                    $pass = null;
                    header('Location: reg_resp/err_pass.php');
                }
            }
            
            if ($login && $pass && $fname && $surname) {
                $bestpass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (login, password, fname, surname, age) VALUES ('$login', '$bestpass', '$fname', '$surname', '$age')";
                
                if (mysqli_query($conn, $sql)) {
                    header('Location: login_form.php');
                }
                else {
                    header('Location: reg_resp/err_add.php');
                }
                
                mysqli_close($conn);
            }
        }
        else
        {
            header('Location: index.php');
        }
        ?>