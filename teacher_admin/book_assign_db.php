<?php
include("conn.php");
if(isset($_POST['book_assign']))
{
$name = $_POST['name'];
$book_name = $_POST['book_name'];
$date = $_POST['date'];
$book_assign = $_POST['book_ass'];


$sql1 = "INSERT INTO book_ass (name,book_name,deadline,status)
VALUES ('".$name."','".$book_name."','".$date."','".$book_assign."')";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
    echo '<script>
    alert("Assign Successfully!");
    window.location.assign("book_ass.php");
    </script>';
}
}

?>