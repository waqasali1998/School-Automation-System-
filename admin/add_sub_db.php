<?php
include("conn.php");
if(isset($_POST['add_subject']))
{
$asin_no = $_POST['asin_no'];
$name = $_POST['name'];
$category = $_POST['category'];
$sql1 = "INSERT INTO subject (asin_no,name)
VALUES ('".$asin_no."','".$name."')";
$result1 = mysqli_query($conn,$sql1);
if($result1)
{
    echo '<script>
    alert("Add Subject Successfully!");
    window.location.assign("add_subject.php");
    </script>';
}

else{
    echo '<script>
    alert("try Again!");
    
    </script>';

}
}

?>