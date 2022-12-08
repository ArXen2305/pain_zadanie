<?php

    require_once('../db.php');

    if(isset($_POST['sub'])) {
        if (empty($_POST['cname']))
        {
            header('Location: admin.php');
            exit();
        }
        else 
        {
            $cname = $_POST['cname'];
            $sql = "INSERT INTO class_name(cname) VALUES ('$cname')";

            if (mysqli_query($conn, $sql)) {
                header('Location: added.php');
            }
            else {
                header('Location: error.php');
            }

            mysqli_close($conn);
        }
    }
    else {
        header('Location: ../admin.php');
    }

?>