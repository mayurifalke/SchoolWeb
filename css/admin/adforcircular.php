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
<form role="form" action="circular.php" method="post" >
    <section> 

        <h1>Circular list</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table> 
		<thead>
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                  <th>ID</th> 
                  <th>Date</th> 
				  <th>Notice</th> 
          <th colspan="2" style="padding:10px; margin-left: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br> </th>
               
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

$selectquery="select * from addcircular";

/*$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);*/
//echo $nums;


$row = $conn->query($selectquery);

//echo $res[0];

if($row->num_rows > 0) {
while($res = $row->fetch_assoc()){
	
	
	  echo "<tr>
      <td>".$res['id']."</td>
      <td>".$res['tdate']."</td>
      <td>".$res['notice']."</td>
      <td><a href='editforCircular.php?id=$res[id]'  class='btn btn-info btn'>Edit&nbsp;&nbsp;&nbsp; </a></td>
      <td><a href='dltforCircular.php?id=$res[id]' class ='btn btn-danger btn'  >Delete</a> 
      </td>
      </tr>";
      

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