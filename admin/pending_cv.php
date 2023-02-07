<?php
include("conn.php");
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
  <title>New Appointmets</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
            <h1>New Appointments CVs</h1>
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
              <div  class="table-scrollable table-responsive">
              <table  id="example1" id="example2" class="table  table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                     <th>Email</th>
                     <th>Position</th> 

                    <th>Qualification</th>

                    <th>Date of Birth</th>
                    <th>NIC</th>
                    <th>Phone</th>
                     <th>Branch</th> 
                    <th>Gender</th> 

                    <!-- <th>Phone</th>
                    <th>Gender</th>
                    <th>Gardian</th> -->
                    <th>Expertise</th>
                   <th> Resume</th>
                    <th> Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                    <?php
$sql = 'SELECT * FROM cv  where approve = "0" || approve = "1"';
$result = mysqli_query($conn,$sql);


foreach($result as $row)
{

                    ?>
                    <tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['tname'] ?></td>
<td><?php echo $row['tlast'] ?></td>
<td><?php echo $row['email'] ?></td> 


<td><?php echo $row['position'] ?></td>
<td><?php echo $row['Qualification'] ?></td>
  <td><?php echo $row['dob'] ?></td> 
 <td><?php echo $row['nic'] ?></td>  
 <td><?php echo $row['phone'] ?></td>  

<td><?php echo $row['branch'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['expertise'] ?></td> 

<td><a href="#?id=<?php echo $row['resume'] ?>"><?php echo $row['resume'] ?></a></td>

<td><?php echo $row['date'] ?></td>

<td><?php  

if($row['approve'] == 0):
  echo '<span style="color: orange;font-weight: bold;">Pending</span>';
  elseif($row['approve'] == 1):
    echo '<span style="color: green;font-weight: bold;">Approved</span>';
else:
  echo '<span style="color: red;font-weight: bold;">Deleted</span>';
endif;
?>


</td>
<td>
<?php
                    
                    if($row['approve'] == 1){ ?>
                   
               <a href="deletecv-db.php?delete_id=<?php echo $row['id']; ?>&approve_name=<?php echo $row['tname']; ?>&approve_email=<?php echo $row['email']; ?>&phone=<?php echo $row['phone']; ?>" onclick="con()"><button class="btn btn-danger">Delete</button></a>

                 <?php
               } 
            

                   
                   else{
                    
                    ?>
               

           
               <a href="deletecv-db.php?delete_id=<?php echo $row['id']; ?>&approve_name=<?php echo $row['tname']; ?>&approve_email=<?php echo $row['email']; ?>&phone=<?php echo $row['phone']; ?>" onclick="con()"><button class="btn btn-danger">Delete</button></a>
               <a href="approvecv-db.php?approve_id=<?php echo $row['id']; ?>&approve_name=<?php echo $row['tname']; ?>&approve_email=<?php echo $row['email']; ?>&phone=<?php echo $row['phone']; ?>" onclick="con()"><button class="btn btn-success">Approve</button></a>


          

                </td>


</tr>   
<?php
}}
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
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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

  $(document).ready(function () {
    $('#example').DataTable({
        scrollX: true,
    });
});

function con()
{
  var ok = confirm("Are you sure you want to delete this item?");
  if(ok)
  {
    return true;
  }
  else
  {
    return false;
  }
}
</script>

</body>
</html>
