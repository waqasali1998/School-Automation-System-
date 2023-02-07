<?php
include("../admin/conn.php");
session_start();
if(!isset($_SESSION['admin']))
{
  echo '<script>
  window.location.assign("login.php");
  </script>';
}
$teacher_session =  $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Appointmets</title>

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
                            <h1>Teaches CV</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CV</li>
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
                                    <h3 class="card-title">Assign Teacher</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Class Assign</label>
                                                    <select class="custom-select" name="std">
                                                        <option selected disabled>Select Option</option>
                                                        <?php
$sql = 'SELECT DISTINCT(class) FROM teacher_ass WHERE email = "'.$teacher_session.'"';
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
                                        <button type="submit" name="classs" class="btn btn-primary">Submit</button>
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
                                <form action="marksform.php" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div  class="table-scrollable table-responsive">
                                        <table id="example1" id="example2"  class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Class</th>
                                                    <th>Action</th>



                                                </tr>
                                            </thead>
                                            <tbody>

                                                
                                 


<?php
if(isset($_POST['classs']))
{
    $sql2='SELECT * FROM register_student WHERE class= "'.$_POST['std'].'"';
    $result2=mysqli_query($conn,$sql2);
    $_SESSION['ii'] = 1;
    foreach($result2 as $row)
    {
           echo '
           <tr>
           <td>'.$row['id'].'<input type="hidden" name="id[]" value="'.$row['id'].'"></td>
           <td>'.$row['fname']." ".$row['lname'].'<input type="hidden" name="fname[]" value="'.$row['fname']." ".$row['lname'].'"> </td>
          
           <td>'.$row['class'].'<input type="hidden" name="" value="'.$row['class'].'"></td>
           
           ';
         
         ?>
<td><a href="marksform.php?id=<?php echo $row['id']; ?>&fname=<?php echo $row['fname']; ?>&class=<?php echo $row['class']; ?>  ">
<button class="btn btn-success">Add Marks</button><a href="marksform.php?id=<?php echo $row['id']; ?>">


<button class="btn btn-warning">Edit Marks</button></a> 

</td> 

<?php
           $_SESSION['ii']++;
       
    }
}
?>




                                            </tbody>
                                        </table>
                                        <!-- <button type="submit" name="attendance" class="btn btn-primary">Submit</button> -->
                                    </div>
                                    <form>
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