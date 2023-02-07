<?php
include("../admin/conn.php");
session_start();
if(isset($_POST['attendance']))
{
$present = $_POST['attendance_std'];
// echo $brands;
foreach ($present as $item)
{
// echo $item . "<br>";
$query = "INSERT INTO example (name) VALUES ('$item')";
$query_run = mysqli_query($conn, $query);

}

if($query_run){
    echo "ass";
}

}

?>