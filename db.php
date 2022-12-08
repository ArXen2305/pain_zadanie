<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
  // echo "<span style='position: absolute;'> Connected successfully </span>";
}
else {
  die("Not nice " . mysqli_connect_error());
}
?>

<?php

function show_all() 
{
    $sql = "SELECT * FROM Student";

    $result = $_SESSION['conn']->query($sql)->fetch_all();

    // echo "Chuj ci w dupe";
    var_dump($result);
};

// show_all();

?>