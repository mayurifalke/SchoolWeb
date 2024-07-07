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

        <h1>Holidays list</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table> 
		<thead>
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                  <th>ID</th> 
                  <th>Day</th> 
				  <th>Date</th>
                  <th>Holiday Name</th> 
                  <th colspan="2" style="padding:10px; margin-left: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br> </th>
                
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

$selectquery="select * from addholidays";

/*$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);*/
//echo $nums;


$row = $conn->query($selectquery);

//echo $res[0];
$row = $conn->query($selectquery);{
while($res = $row->fetch_assoc()){	
	
	 echo  "<tr>
      <td>".$res['id']."</td>
      <td>".$res['day']."</td>
      <td>".$res['date']."</td>
      <td style='width:450px;'>".$res['name']."</td>
      <td><a href='editforHol.php?id=$res[id]?id=$res[id]'  class='btn btn-info btn'>Edit </a></td>
      <td><a href='deleteforHol.php?id=$res[id]' class ='btn btn-danger btn'  >Delete</a> 
      </td>
      ";?></tr>
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