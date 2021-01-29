
<?php
 include('process.php');
if(isset($_POST['save']))
{  

 
  $ProType = $_POST['ProType'];
//echo $ProRef;
  $ProRef = $_POST['ProRef'];

  $sql="SELECT * FROM `data` WHERE `ProRef`= '$ProRef' ";

  $res=mysqli_query($con,$sql);

  if (mysqli_num_rows($res) > 0 ) {
        
        $row = mysqli_fetch_assoc($res);
        
        echo "Project Reference already exists";
        }
    

  $ProName = $_POST['ProName'];
  $ProLoc = $_POST['ProLoc'];
  $ProCost = $_POST['ProCost'];
 
  if(!isset($_POST['ProVat'])){
        $ProVat = "0.00";
 
  }
  else{
    $ProVat = $_POST['ProVat'];
  }

  
  $ProSdate = $_POST['ProSdate'];
  $ProEdate = $_POST['ProEdate'];
  $ProAEdate = $_POST['ProAEdate'];
  $ProStatus = $_POST['ProStatus'];
  $ProVar = $_POST['ProVar'];
  $ProRem = $_POST['ProRem'];


  $qry = "INSERT INTO `data`(`ProType`, `ProRef`, `ProName`, `ProLoc`, `ProCost`, `ProVat`,`ProSdate`, `ProEdate`,`ProAEdate`, `ProStatus`, `ProVar`, `ProRem`) VALUES ('$ProType' , '$ProRef', '$ProName' , '$ProLoc', '$ProCost',  '$ProVat', '$ProSdate', '$ProEdate', '$ProAEdate', '$ProStatus', '$ProVar', '$ProRem')";

  $run = mysqli_query($con,$qry);

  if($run == true)
  {

   // $data = mysqli_fetch_assoc($run)
    ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 25px; background-color: #4CAF50;"> Entity Added Successfully! 😊 </span> 
     
  <?php
  header('Location: BOQ.php');
  }
}

if(isset($_POST['save2']))
{  
  $BOQItemName = $_POST['BOQItemName'];
  $Amount = $_POST['Amount'];
  $ProRef = $_POST['ProRef'];

  $qry2 = "INSERT INTO `boq`( `BOQItemName`, `Amount`, `ProRef` ) VALUES ( '$BOQItemName', '$Amount' , '$ProRef')";

  $run2 = mysqli_query($con,$qry2);

  if($run2 == true)
  {

   // $data = mysqli_fetch_assoc($run)
    ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 25px; background-color: #4CAF50;"> Entity Added Successfully! 😊 </span> 
     
  <?php
  header('Location: BOQ.php');
  }
}
?>
<?php
if(isset($_POST['updateboq']))
{
 $BOQItem = $_POST['sid'];
  $BOQItemName = $_POST['BOQItemName'];
  $Amount = $_POST['Amount'];

  
  $qry = "UPDATE `boq` SET `BOQItemName` = '$BOQItemName', `Amount` ='$Amount'  WHERE  `BOQItem` = '$BOQItem' ";

  $run = mysqli_query($con,$qry);

  if($run == true)
  {
     ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 35px; background-color: #4CAF50;"> Item Updated Successfully! 😊 </span> 
  <?php
    header('Location: BOQ.php');
  }
}
?>
<?php
if(isset($_POST['addlist']))
{  
  $ItemName = $_POST['ItemName'];
  

  $qry2 = "INSERT INTO `loi-items`( `ItemName` ) VALUES ( '$ItemName' )";

  $run2 = mysqli_query($con,$qry2);

  if($run2 == true)
  {

   // $data = mysqli_fetch_assoc($run)
    ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 25px; background-color: #4CAF50;"> Entity Added Successfully! 😊 </span> 
     
  <?php
  header('Location: listitem.php');
  }
}
?>

<?php

if(isset($_POST['signup']))
{
  
  $email = $_POST['email'];
  $name = $_POST['name'];
   $password = $_POST['password'];

$sql="select * from user where (email='$email')";

 $res=mysqli_query($con,$sql);

 if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
      
              echo "Sorry that email already exists 😞";
  
              exit;
}

else{
  
  $qry = "INSERT INTO `user`( `email`, `name`, `password` ) VALUES ( '$email', '$name' , '$password' ) ";

  $run = mysqli_query($con,$qry);

   if($run == true)
 {
//echo "data inserted";
?>
    <script type="text/javascript">
      alert('Data inserted successfully 😊 \n Thankyou..!');
    
    </script>
  <?php
          header ('location:index2.php'); 


  }
}
}
?>

<?php

if(isset($_POST['signin']))
{
  
  $email = $_POST['email'];
   $password = $_POST['password'];

  $sql="SELECT * FROM `user` WHERE `email` = '$email' and `password` = '$password'";

  $result = mysqli_query($con, $sql);


  if(mysqli_num_rows($result) < 1)
   {
      echo "<tr><td colspan ='6' > No Records Found </td></tr>";

   }
   
   else{
         $count =0;  
    while($data = mysqli_fetch_assoc($result))
    {    
      $count++;
      $name = $data['name'];
      $email = $data['email'];
    }
    header ('Location:user/view.php?id='.$name); 

     }
    }
?>

<?php
if(isset($_POST['usersave']))
{  
  $ProRef = $_POST['ProRef'];
  echo $ProRef;

  $Amount = $_POST['Amount'];
  echo $Amount;
  $name = $_POST['name'];
  echo $name;
  $TotalAmount = $_POST['TotalAmount'];
  $PostingDate = $_POST['PostingDate'];
  $BOQItemName = $_POST['BOQItemName'];
  $LOIItemName = $_POST['LOIItemName'];
  $BillDate = $_POST['BillDate'];
echo $TotalAmount;
echo $PostingDate;
echo $BOQItemName;
echo $LOIItemName;
echo $BillDate;
 if(isset($_POST['VAT'])){
         $VAT = $_POST['VAT'];
 
  }
 
  
    $VAT = $_POST['VAT'];
    echo "pppp=", $VAT;
  
echo"ccc";

  $qry4 = "INSERT INTO `projexp`(`ProRef`, `Amount`, `name`, `TotalAmount`, `PostingDate`, `BOQItemName`, `LOIItemName`, `BillDate`,`VAT` ) VALUES ('$ProRef' , '$Amount', '$name' , '$TotalAmount', '$PostingDate', '$BOQItemName', '$LOIItemName', '$BillDate', '$VAT' )";

  $run1 = mysqli_query($con,$qry4);
echo"fff";
  if($run1 == true)
  {
echo"fff";
   // $data = mysqli_fetch_assoc($run)
    ?>
    <span class="label success"  style=" display: block;text-align: center; font-size: 19px; height: 25px; background-color: #4CAF50;"> Entity Added Successfully! 😊 </span> 
     
  <?php
  header('Location: user/dashboard.php');
  }
  else{
    echo"error";
  }
}
?>