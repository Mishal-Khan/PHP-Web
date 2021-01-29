<?php
include ('process.php');
  $item = $_REQUEST['sid'];
  $qry = "DELETE FROM `boq` WHERE `BOQItem`= '$item'";

  $run = mysqli_query($con,$qry);

  if($run == true)
  {
    ?>
     <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 35px; background-color: #4CAF50;"> Item Deleted Successfully! 😊 </span> 

  <?php
   header('Location: BOQ.php');
  }else{
    echo "<script>alert('Cannot run.');</script>";
  }

?>