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
<form role="form" action="conformiedUser.php" method="post" >
    <section> 

        <h1>Student list</h1> 

        <!-- TABLE CONSTRUCTION--> 

        <table> 
		<thead>
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                  <th>ID</th> 
                  <th>simage</th> 
				           <th>pass</th> 
                <th>Student Name</th> 
                <th>birth</th> 
                <th>adate</th>
                <th>pemail</th> 
                <th>gender</th>
                <th>pno</th> 
                <th>addr</th>
                <th colspan="2" style="padding:10px; margin-left: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action<br> </th>
               
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

$selectquery="select * from adduser";

/*$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);*/
//echo $nums;


$row = $conn->query($selectquery);

//echo $res[0];
if($row->num_rows > 0) {
while($res = $row->fetch_assoc()){
  

  
	
    echo "<tr> 
      <td>".$res['id']."</td>
      <td><img src=' ".$res['uimg']." ' height='100px' width='90px'></td>
      <td>".$res['pass']."</td>
      <td>".$res['sname']."</td>
      <td>".$res['birth']."</td>
      <td>".$res['adate']."</td>
      <td>".$res['pemail']."</td>
      <td>".$res['gender']."</td>
      <td>".$res['pno']."</td>
      <td>".$res['addr']."</td>
      
      <td><a href='editforConformied.php?id=$res[id]'  class='btn btn-info btn'>Edit </a></td>
      <td><a href='dltforConformied.php?id=$res[id]' class ='btn btn-danger btn'  >Delete</a> 
      </td>

      </tr>
      ";?>
      
<?php	
}
}
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
		</tbody>
     </table>
     </div>  
</form>		
     
</body>	
</body>     
</html>  