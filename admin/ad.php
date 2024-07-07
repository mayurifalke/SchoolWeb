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
<form role="form" action="register.php" method="post" >
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
                  <th>Name</th> 
				 <th>Date of Birth</th> 
                <th>Parent emailID</th> 
                <th>Gender</th> 
                <th>Parent PhoneNo.</th>
                <th>Nation</th> 
                <th>MotherTongue</th>
                
                <th>Father name</th>  
                <th colspan="2" style="padding:35px;">Action </th>
                
               
                  </tr>
<tbody>	       
    
<?php
include("database1.php");

$selectquery="select * from registration2";

/*$query = mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);*/
//echo $nums;


$row = $conn->query($selectquery);

//echo $res[0];
if($row->num_rows > 0) {
while($res = $row->fetch_assoc()){
?>	
	<?php
	 echo  "<tr>
      <td>". $res["id"]."</td>
      <td>". $res["studentname"]."</td>
      <td>". $res["birth"]."</td>
      <td>".$res["email"]."</td>
      <td>". $res["gender"]."</td>
      <td>". $res["fatherNo"]."</td>
      <td>".$res["nation"]."</td>
      <td>". $res["mothertongue"]."</td>
      <td>". $res["fathername"]."</td>
     
     
      <td><a href='edit2.php?id=$res[id]'  class='btn btn-info btn'>Edit </a></td>
      <td><a href='?id=$res[id]' class ='btn btn-danger btn'  >Response</a> 
      </td>
      
      </tr>";
      //<td> <a href="" class ="btn btn-danger btn-sm" >Delete</a>
      // & sn=$res[studentname] &$res[birth]&$res[email]&$res[gender]&$res[fatherNo]&$res[nation]&$res[income]&$res[mothertongue]&$res[fathername]
      ?>
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