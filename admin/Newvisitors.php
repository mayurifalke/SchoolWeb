<?php
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
              <div class="card-header">
                
                 <!-- <button style="background-color:yellow;margin-left:950px;"><a href="#" data-toggle="modal" data-target="addusermodel" class="btn btn-primary_float-left">add user</a></button>-->
                </h3>
              </div>
          <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <?php

                 // $query ="select * from registration";
                  include('adforVisitors.php');
                  ?>
                  </thead>
                  <tbody>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php
include('includes/footer.php');
?>