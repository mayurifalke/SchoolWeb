<!DOCTYPE html>   
<html>   
<head>  
 
<title> list </title>  
<style>   

</style>   
</head>    
<body>    
 
    <form>  
        <div class="container">   
            

     <body> 
<form role="form" action="holidaycal.php" method="post" >
    <section> 

        <h1>Events list</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table> 
		<thead>
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                  <th>ID</th> 
                  
				  <th>Images</th>
                  <th>Date</th> 
                  <th>Event Name</th>  
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

/*$selectquery="select * from addevent";

$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);
//echo $nums;


$res = mysqli_fetch_array($query);

//echo $res[0];
while($res = mysqli_fetch_array($query)){*/

  $selectquery="select * from addevent";


$row = $conn->query($selectquery);

//echo $res[0];
if($row->num_rows > 0) {
while($res = $row->fetch_assoc()){


	
	  echo "<tr>
      <td>".$res['id']."</td>
      
      <td><img src=' ".$res['simage']." ' height='100px' width='100px'></td>
      <td>".$res['date']."</td>
      <td>".$res['name']."</td>";?>
      <td>
        <!--<a href='">Edit &nbsp;</a>
        <a href="" class="btn btn-danger btn-sm" >Delete</a>-->
      </td>
      </tr>
      
<?php	
}
}
?>
		</tbody>
     </table>
     </div>  
</form>		
     
</body>	
</body>     
</html>  