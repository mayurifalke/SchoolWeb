<?php
session_start();
$euser = $_SESSION['user_name'];
//echo "Welcome ".$euser;
?>
<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<?php

//if user doesn't login and try to acess the parent page by using url
$userprofile = $_SESSION['user_name'];
echo "<script> alert('Welcome $userprofile'); </script>";
if($userprofile == true)
{

}
else{
    echo "<script>window.location.href='adminpage.php';</script>";
}

?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3><br><br>

                <p style="font-size: 20px">Role for Confirmed<br> Admission user</p>
              </div>
              <div class="icon">
                <i class="ion-checkmark-round"></i>
              </div>
              <a href="conformiedUser.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3><br><br><br>

                <p style="font-size: 20px; color=white;">Registred User<br></p>
              </div>
              <div class="icon">
                
                <i class="ion-person-stalker"></i>
              </div>
              <a href="register.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3><br><br><br>

                <p style="font-size: 20px; color=white;"> New Visitors</p>
              </div>
              <div class="icon">
                <i class="ion-ios-telephone"></i>
              </div>
              <a href="Newvisitors.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3><br><br><br>

                <p style="font-size: 20px; color=white;">Circulars</p>
              </div>
              <div class="icon">
                <i class="ion-android-calendar"></i>
              </div>
              <a href="circular.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
        
        
        
         
     
    </section>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3><br><br>

                <p style="font-size: 20px">Holidays</p>
              </div>
              <div class="icon">
                <i class="ion-android-calendar"></i>
              </div>
              <a href="holidaycal.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px"></sup></h3><br>

                <p style="font-size: 20px">Event Calendar<br><br></p>
              </div>
              <div class="icon">
                
                <i class="ion-android-calendar"></i>
              </div>
              <a href="eventCal.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3><br><br>

                <p style="font-size: 20px; color=white;"> Complaint Details</p>
              </div>
              <div class="icon">
                <i class="ion-android-textsms"></i>
              </div>
              <a href="complaint.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         <!-- <div class="col-lg-3 col-6">-->
            <!-- small box -->
           <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3><br><br>

                <p>Complaint Details</p>
              </div>
              <div class="icon">
                <i class="ion-android-textsms"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>-->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
        
        
        
         
     
    </section>
</div>
<?php
include('includes/footer.php');
?>