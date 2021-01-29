<?php
session_start();
include('process.php');
include('nav.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOI</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

   <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 

    </script> 
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
  input[type='number'] {
    -moz-appearance:textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;

}
body {font-family: Arial, Helvetica, sans-serif;
background-color: #FEFCFF;}
* {box-sizing: border-box;}

</style>

</head>
<body>
 <h2 style="color:darkblue; height: 80px; font-size: 42px; font-weight: bold;" class="mb-6">Add List Items</h2>
       
       <div style="color: darkblue ; height: 10px;margin-bottom:20px;  background-color: darkblue; ">
    </div>
       <br>

	<div class="form-group justify-content-center"  >
	<form action="validation.php" method="POST">
		
		

<table style="font-family: arial, sans-serif; 
  border-collapse: collapse; padding: 5px; color: black;
  width: 99%; margin-top: 20px; border-radius: 20px; border-color: blue " border="2">

  <tr>

      <th style="border: 1px solid blue; text-align: left;padding: 5px;">Item Name</th>
  </tr>

  <tr>

       <td style="border: 1px solid blue; text-align: left;padding: 5px;">
 <input type="text" name="ItemName" class="form-control" required>
        </td>  

      </tr>

</table>


</div>       

<div class="form-group">
	<button type="submit" class="btn bg-primary" name="addlist"> Add List  </button>
</div>
	</form>

<table style="font-family: arial, sans-serif; border-radius: 40px;
  border-collapse: collapse; color: black;
  width: 100%; margin-top: 25px;  padding: 5px; border-color: black; " border="">
      
      <tr style="height:40px; text-align: center; border-radius: 20px;" >
        <th>List Item No.</th>
        <th>Item Name</th>
        <th>EDIT</th>
        <th>DELETE</th>

      </tr>
<?php

  $sql="SELECT * FROM `loi-items` ";

  $result = mysqli_query($con, $sql);


  if(mysqli_num_rows($result) < 1)
   {
      echo "<tr><td colspan ='6' > No Records Found </td></tr>";

   }
   
   else{
         $count =0;  
         $sum =0;
    while($data = mysqli_fetch_assoc($result))
    {    
      $count++;
    
      //$sum = $data['Amount'] + $sum;


      ?>
      <tr style="text-align: center; height:35px; ">
      <td><?php echo $data['ItemNo']; ?></td>
     <td><?php echo $data['ItemName']; ?></td>
    <td><a class="btn bg-primary" href= "updateboq.php?sid=<?php echo $data['BOQItem']; ?>">EDIT</a></td>
       <td><a class="btn bg-primary" href= "boqdelete.php?sid=<?php echo $data['BOQItem']; ?>">DELETE</a></td>

    </tr>


      <?php

    }
   }

?>
 </table>  


</div>
</body>
</html>
