<?php

    require_once('../db.php');

    if(isset($_POST['sub'])) {
        if (empty($_POST['teacher_n']) || empty($_POST['teacher_sn']))
        {
            header('Location: admin.php');
            exit();
        }
        else 
        {
            $te_name = $_POST['teacher_n'];
            $te_surname = $_POST['teacher_sn'];
            $te_age = $_POST['teacher_age'];
            $te_sub_name = $_POST['teacher_sub_name'];
            $sql = "INSERT INTO teacher(fname, surname, age, subject_name) VALUES ('$te_name', '$te_surname', '$te_age', '$te_sub_name')";

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