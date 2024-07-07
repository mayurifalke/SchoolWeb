<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include('connection.php');
?>
<?php
if(isset($_POST['searchdata']))
{
    $search = $_POST['sid'];
    
    $query = "SELECT simage FROM adduser WHERE  ";
    echo "<script> alert('Found successfully'); </script>";
    $data = mysqli_query($con,$query);

    $result = mysqli_fetch_array($data);
    $image_data = $result['simage'];
    //$name = $result['sname'];
    //echo $name;
}
?>

<body>
<?php 
  while($result = mysqli_fetch_array($data)){
    if(isset($_POST['searchdata']))
    {
    echo "<tr> 
      <td>".$result['id']."</td>
      <td><img src=' ".$result['simage']." ' height='100px' width='100px'></td>";
    }
  }
  ?>

    <?php
         // echo '<img height="300" width="400" src="data:img/jpg;base64,'.$image_data.'"/>';
    ?>



 <!--<p>Display status message 
echo $statusMsg; 
</p>-->

    
</body>
</html>