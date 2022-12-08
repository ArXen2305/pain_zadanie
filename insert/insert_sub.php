<?php

    require_once('../db.php');

    // if (!isset($_SESSION['logedin']))
    // {
    //     header('Location: index.php');
    // }

    if(isset($_POST['sub'])) {
        if (empty($_POST['subject']))
        {
            header('Location: admin.php');
            exit();
        }
        else 
        {
            $sub_name = $_POST['subject'];
            $c_id = $_POST['class_id'];
            $sql = "INSERT INTO school_subject(sname, class_id) VALUES ('$sub_name', '$c_id')";

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