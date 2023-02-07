<?php
include("conn.php");
// if (isset($_GET['edit'])) {
//     $id = $_GET['edit'];
//     $edit_state = true;
    
//     $record = mysqli_query($conn, "SELECT * FROM library WHERE id=$id");
// $data = mysqli_fetch_array($record);
//       $asin_no = $data['asin_no'];
//       $name = $data['name'];
//       $category = $data['category'];
      

    
//   }
session_start();
if(!isset($_SESSION['admin']))
{
  echo '<script>
  window.location.assign("login.php");
  </script>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>

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
                            <h1>Library</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Library</li>
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
                                    <h3 class="card-title">Add new Book</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form  action="add_book.php" method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ASIN NO</label>
                                                    <input type="text" class="form-control" placeholder="Asin no" name="asin_no" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Book Name</label>
                                                    <input type="text"  class="form-control" placeholder="Book Name" name="name" placeholder="Enter email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Book Category</label>
                                                    <select  class="custom-select" name="category">
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
                                         <!-- <?php if ($edit_state == false): ?> -->
                                        <button type="submit" class="btn btn-success" name="add_book">Add Book</button>
                                      <!-- <?php else: ?> -->
                                      <button type="submit" class="btn btn-warning" name="update_book">Add Book</button>

                                       <!-- <?php endif ?> -->

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
                    <th>ASIN NO</th>
                    <th>BOOK NAME</th> 
                    
                     
                     <th>CATEGORY</th> 

                   
                    <th>Action</th> 
                 
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                
    $sql1 = 'SELECT * FROM library WHERE approve = 1';
    $result1 = mysqli_query($conn,$sql1);
                                                if($result1)
                                                {

foreach($result1 as $row1)
{

                    ?>
                                                <tr>
<td><?php echo $row1['id'] ?></td>
<td><?php echo $row1['asin_no'] ?></td>
<td><?php echo $row1['name'] ?></td>

<td><?php echo $row1['category'] ?></td>
<td><a href="library.php?edit_id=<?php echo $row1['id']; ?>" onclick="con()">
<button class="btn btn-success">Edit</button></a>

<a href="delete_book.php?delete_id=<?php echo $row1['id']; ?>" onclick="con()">
<button class="btn btn-danger">Delete</button></a>




</td>


                        
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