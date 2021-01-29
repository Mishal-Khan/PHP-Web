<?php
include ('process.php');
if(isset($_POST['updatesearch']))
{
 $BOQItem = $_POST['sid'];
  $ProRef = $_POST['ProRef'];
  $BOQItemName = $_POST['BOQItemName'];
  $Amount = $_POST['Amount'];

  
  $qry = "UPDATE `boq` SET `BOQItemName` = '$BOQItemName', `Amount` ='$Amount' , `ProRef` = '$ProRef'  WHERE  `BOQItem` = '$BOQItem' ";

  $run = mysqli_query($con,$qry);

  if($run == true)
  {
     ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 35px; background-color: #4CAF50;"> Item Updated Successfully! 😊 </span> 
  <?php
    header('Location: search.php');
  }
}
?>