<?php
session_start();
?>
<html>
    <head>
     <style>
       /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  overflow: scroll;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 6px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text],.form-container input[type=date],.form-container textarea {
  width: 100%;
  padding: 7px;
  margin: 10px 0 17px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,.form-container textarea, .form-container input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:2px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
     </style>
    </head>
    <body>
<?php

include('connection.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  

<!-- Modal -->
<div class="modal fade" id="addusermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="but ton" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="container">
  <div class="row">
<div class="col-md-12">
<div class="card">
             

   
    <button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="#" class="form-container" method="post" enctype="multipart/form-data">
   <!-- <h1>Login</h1>-->
   
   
    <label><b>Today's Date</b></label>
    <input type="date"  name="tdate" required>

    <label><b>Notice</b></label>
   <!-- <input type="textarea" placeholder="Enter Admission Date" name="adate" required>-->
    <textarea placeholder="Enter Notice" name="notice" required></textarea>>

    

    <button type="submit" class="btn" name="reg">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

                 <!--<button style="background-color:yellow;margin-left:950px;"><a href="#" data-toggle="modal" 
                 data-target="addusermodel" class="btn btn-primary_float-left">add user</a></button>
                </h3>-->
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
               <?php
                $query ="select * from registration";
                include('adforcircular.php');
                  ?>
                 </thead>
               

             </tbody>
              </table>

              </div>
              </div>
</div>
</div>
</div>
</div>
    </body>
</html>
<?php
//include('includes/footer.php');
?>

<?php
if(isset($_POST['reg']))
{


$tdate = $_POST['tdate'];
$notice = $_POST['notice'];



$sql = "INSERT INTO addcircular (tdate,notice) VALUES ('$tdate','$notice')";

if (mysqli_query($con, $sql)) 
{
    
    echo "<script> alert('New record created successfully'); </script>";
} 
else 
{
   
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

}
?>
