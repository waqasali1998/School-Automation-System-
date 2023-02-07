<?php
include("conn.php");
if(isset($_POST['add_book']))
{
$asin_no = $_POST['asin_no'];
$name = $_POST['name'];
$category = $_POST['category'];
$sql1 = "INSERT INTO library (asin_no,name,category)
VALUES ('".$asin_no."','".$name."','".$category."')";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
    echo '<script>
    alert("Add Book Successfully!");
    window.location.assign("library.php");
    </script>';
}
}

?>