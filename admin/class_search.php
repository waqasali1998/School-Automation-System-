<?php
include("conn.php");
session_start();
if(!isset($_SESSION['admin']))
{
  echo '<script>
  window.location.assign("login.php");
  </script>';
}
if(isset($_POST['search_std']))
{

    $filter = '';

    if(isset($_POST['std_id']))
{
    if($_POST['std_id'] != "")
    {
        $id = $_POST['std_id'];
        $filter .= " AND id = $id";
    }
   
}
    if(isset($_POST['std_name']))
    {
        if($_POST['std_name'] != "") {
            $name = $_POST['std_name'];
            $filter .= ' AND `fname` LIKE "%' . $name . '%" ';
        }
    }




// if(isset($_POST['engineering_discipline']))
// {
// $values = $_POST['engineering_discipline'];
//     for( $i = 0 ; $i < count($values) ;$i++)
//     {
//         if(isset($_POST['engineering_discipline'])) {
//             if($_POST['engineering_discipline'] != "") {
//                 $array = $_POST['engineering_discipline'];
//                 $filter .= ' AND `Engineering_discipline` LIKE "%' . $array[$i]. '%" ';
//             }
//         }
//     }
// }

// Area Wise Start //

if(isset($_POST['class'])) {
    if($_POST['class'] != "") {
        $class = $_POST['class'];
        $filter .= ' AND `class` LIKE "%' . $class . '%" ';
    }
}
// Area Wise End //

// Area Wise Start //
// if(isset($_POST['discipline'])) {
//     if($_POST['discipline'] != "") {
//         $discipline = $_POST['discipline'];
//         $filter .= ' AND `Engineering_discipline` = "' . $discipline . '" ';
//     }
// }
// Area Wise End //

// Area Wise Start //
// if(isset($_POST['city'])) {
//     if($_POST['city'] != "") {
//         $city = $_POST['city'];
//         $filter .= ' AND `City` = "' . $city . '" ';
//     }
// }

// Area Wise End //
// $sql = 'SELECT * FROM `project_brief` WHERE Title = "'.$_POST['title'].'" AND Engineering_discipline = "'.$_POST['discipline'].'" AND City = "'.$_POST['city'].'"';
$sql1 = "SELECT * FROM register_student WHERE approve = 1".$filter;
$result1 = mysqli_query($conn,$sql1);
}
else
{
    $sql1 = 'SELECT * FROM register_student WHERE approve = 1';
    $result1 = mysqli_query($conn,$sql1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Record</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <style>


    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include("nav.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include("sidebar.php    "); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Search </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Search</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Search Student</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form  method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Search ID</label>
                                                    <input type="number" class="form-control" id="exampleInputEmail1" name="std_id" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Search Student Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1" name="std_name" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Search Class</label>
                                                    <select class="custom-select" name="class">
                                                        <option selected disabled>Select Option</option>
                                                        <?php
$sql = 'SELECT * FROM classes';
$result = mysqli_query($conn,$sql);
if($result)
{
    foreach($result as $row)
    {
        echo '<option value="'.$row['class'].'">'.$row['class'].'</option>';
    }
}
                                                        ?>
                                           
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success" name="search_std">Search</button>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Appoinments CVS</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-scrollable table-responsive">
                                        <table id="example1" id="example2" class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     <th>Email</th> 

                    <th>Date of Birth</th>
                    <th>Address</th>
                     <th>Student Nic</th> 
                    <th>father Nic</th> 

                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Gardian</th> 
                    <th>Class</th>
                    <th>Registrations Date</th> 
                 
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                if($result1)
                                                {

foreach($result1 as $row1)
{

                    ?>
                                                <tr>
                                                <td><?php echo $row1['id'] ?></td>
<td><?php echo $row1['fname'] ?></td>
<td><?php echo $row1['lname'] ?></td>
<td><?php echo $row1['email'] ?></td> 


<td><?php echo $row1['dob'] ?></td>
<td><?php echo $row1['address'] ?></td>
  <td><?php echo $row1['student_nic'] ?></td> 
 <td><?php echo $row1['father_nic'] ?></td>  

 <td><?php echo $row1['number'] ?></td>
 <td><?php echo $row1['gender'] ?></td>
 <td><?php echo $row1['gardian'] ?> </td>
<td> <?php echo $row1['class'] ?></td>
<td><?php echo $row1['register_date'] ?> </td>                          
                                                </tr>
                                                <?php
}
}
?> 



                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            
        </div>
        <!-- /.content-wrapper -->
        <?php  include("footer.php"); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="./plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="./plugins/jszip/jszip.min.js"></script>
    <script src="./plugins/pdfmake/pdfmake.min.js"></script>
    <script src="./plugins/pdfmake/vfs_fonts.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(document).ready(function() {
        $('#example').DataTable({
            scrollX: true,
        });
    });

    function con() {
        var ok = confirm("Are you sure you want to delete this item?");
        if (ok) {
            return true;
        } else {
            return false;
        }
    }
    </script>

</body>

</html>