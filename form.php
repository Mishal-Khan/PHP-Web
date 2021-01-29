<?php
SESSION_START();
include('process.php');
include ('nav.php');

  $sql="SELECT MAX(ProRef) AS max FROM `data`;";

  $row=mysqli_query($con,$sql);
        
  $res = mysqli_fetch_assoc($row);
  $ProRef = $res['max'];
  $ProRef = $ProRef+1; 

  $_SESSION['ProRef'] = $ProRef;      
?>


<!DOCTYPE html>
<html>
<head>
	<title>LPO</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

    </script> 
    <script type = "text/javascript"> 
function showMessage() {
alert ("Form submitted");
}
</script>
    <script> 
    	var val1;
        $(document).ready(function() {
        	$('#ProCost').focusout(function(){
        	var cal = $(this).val();
        	 val1 = (cal/100)*5;
        	  var text = document.getElementById("text").innerHTML = val1;

        	    })
        	console.log("jjjj", val1)

          $('#check').click(function() { 
          	 
          	 
 
                if ($("#check").is(":checked") == true) {

                    $('#check').val(val1);
                    console.log("vvvv", check.value); 
                    text.style.display = "inline-block";
                }
                else {
                    text.style.display = "none";
                }
               
            }); 
        }); 
    </script>


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

.form-inline {  
  display: grid ;  
  flex-flow: row wrap;
  align-items: center;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #EBF4FA;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid black;
  color: black;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>

</head>
<body>
	<h2 style="color:darkblue; height: 80px; font-size: 39px; font-weight: bold;" class="mb-6">Add Project</h2>
       
       <div style="color: darkblue ; height: 10px;margin-bottom:20px;  background-color: darkblue; ">
    </div>
       <br>
	<div class="form-group justify-content-center"  >
	<form action="validation.php" method="POST" >
    
		<div class="form-group row" >
    <label class="col-sm-3 col-form-label">Project Reference: </label>
	  
    <div class="col-sm-5" >      
		<input type="number" class="form-control" name="ProRef"  value=<?php echo $ProRef ?> readonly>
      </div>
</div>

  <div class="form-group row" >
    <label class="col-sm-3 col-form-label"> Project Type: </label>
    
    <div class="col-sm-5" >
      <select class="form-control"  name="ProType" required>
        <option>P</option>
        <option>M</option>
        <option>O</option>
      </select>
       
 </div>
</div>

    <div class="form-group row" >
    <label class="col-sm-3 col-form-label">Project Cost: </label>
    
    <div class="col-sm-5" >
    <input type="number" id="ProCost" name="ProCost" class="form-control"  required>
        </div>
      </div>
<div class="form-group row" >
    <label class="col-sm-3 col-form-label">Project Start Date:  </label>
    
    <div class="col-sm-5" >
        
    <input type="date" name="ProSdate" class="form-control" >
        </div>
      </div>

       <div class="form-group row" >
    <label class="col-sm-3 col-form-label">Project End Date:   </label>
    
    <div class="col-sm-5" >
    <input type="date" name="ProEdate" class="form-control" required>
        </div>
      </div>

      <div class="form-group row" >
    <label class="col-sm-3 col-form-label">Project Actual End Date:   </label>

    <div class="col-sm-5" >
    <input type="date" name="ProAEdate" class="form-control" >
        </div>
      </div>
      <div class="form-group row" >
    <label class="col-sm-3 col-form-label"> Project Status:  </label>
    
    <div class="col-sm-5" >
      <select class="form-control" name="ProStatus" required>
         <option value="Awarded" selected> 
          Awarded
         </option> 
        <option>Progress</option>
        <option>Completed</option>
        <option>Hold</option>
        <option>Dispute</option>
        <option>Delay</option>
        <option>Handing Over</option>
        <option>Maintenance Period</option>
        </select>
        </div>
</div>


       
       <div class="form-group row" >
    <label class="col-sm-3 col-form-label"> Project Variation Reference:  </label>
    
    <div class="col-sm-5" >
    <input type="number" name="ProVar" class="form-control" >
      </div>
    </div>
 <div class="form-group row" >
    <label class="col-sm-3 col-form-label"> Project Remarks:  </label>
    
    <div class="col-sm-5" >
    <input type="text" name="ProRem" class="form-control"  >
        </div>
      </div>

    
<label style="padding-bottom: 0px;" class="form-group row col-sm-3" > Project Name: </label>

 <div class="form-inline" >    
  
      <input type="text" name="ProName" class="form-control"  required>
        </div>
 
<label style="padding-bottom: 0px;" class="form-group row col-sm-3" >Project Location: </label>

 <div class="form-inline" >    
  
		<input type="text"  name="ProLoc" class="form-control"  required>
        </div>
      
  
   
<div class="form-group">
 <label>Project VAT: </label>
    
    <input  type="checkbox" name="ProVat" id="check" placeholder="ProVat" > 
    <label  id="text" style="display:none;"></label>
    </div>

<div class="form-inline">
	<button type="submit" class="btn btn-primary" name="save" showMessage()> Save </button>
</div>
	</form>
</div>

 </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
include('validation.php');
?>