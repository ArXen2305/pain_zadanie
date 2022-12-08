<?php

    require_once('../db.php');

    if(isset($_POST['sub'])) {
        if (empty($_POST['student_n']) || empty($_POST['student_sn']))
        {
            header('Location: admin.php');
            exit();
        }
        else 
        {
            $st_name = $_POST['student_n'];
            $st_surname = $_POST['student_sn'];
            $sql = "INSERT INTO student(fname, surname) VALUES ('$st_name', '$st_surname')";

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