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
                  <th>Student Full Name</th> 
				 <th>Complaint</th> 
                 <th colspan="2" style="padding:35px;">Action </th>
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

$selectquery="select * from complaint";

/*$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);*/
//echo $nums;


$row = $conn->query($selectquery);

//echo $res[0];
if($row->num_rows > 0) {
while($res = $row->fetch_assoc()){
	
	
    echo "<tr> 
      <td>".$res['id']."</td>
      <td>".$res['name']."</td>
      <td>".$res['comp']."</td>
      
      
      <td><a href='https://mail.google.com/mail/u/0/#inbox'  class='btn btn-info btn'>Response </a></td>
      <td><a href='delete.php?id=$res[id]' class ='btn btn-danger btn'  >Delete</a> 
      </td>
      ";?>
      
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