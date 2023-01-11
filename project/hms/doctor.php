<?php
  
$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
 /* 	$sqltran = mysqli_query($con, "SELECT fname FROM user where id ='129'")or die(mysqli_error($con));
		$arrVal = array();
 		
		
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$dname = array(
								
 	 		 	 				'dname'=> $rowList['fname'],
	
 	 		 	 			);		


							array_push($arrVal, $dname);	
				
	 	}
	 		 echo  json_encode($arrVal);  */

mysqli_close($con);
?>			
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hospital Management System</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="hms/css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
	
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/maincss.css" rel="stylesheet" />
		 
		  </head>
		  <body>
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="../home page.php" style="font-size: 30px; color:cadetblue;">Hospital Management system</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="../home page.php">Home</a></li>

						<li><a href="../contact.php">contact</a></li>
						
						<li class="active"><a href="logout.php">logout</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="container">
	<div class="col-md-12">
		<div class="page-header">
			<input type="text" id="fname" value="Haseeb Javed (Specialist)"  style="font-size: 25px; color:cadetblue; padding-right: 5px;" readonly ><br><br>
		</div>


		<div class="panel panel-success">
			<div class="panel-heading ">
<center>			
				<h1>
				FIXED YOUR PATIENT APPOINTMENT
			</h1>
			 	</center> 
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table"
			                	data-show-columns="true"
 				                data-height="460">
								<label for="option" style="font-size: 25px; color:cadetblue; padding-right: 5px;">Choose your availability</label>
<form action="connect2.php" method="post">
<select name="option" style="font-size: 15px; color:cadetblue; padding-right: 5px;" id="opt">
  <option value="y">YES</option>
  <option value="n">NO</option>

</select>
<input id="Button1" type="submit" value="Save" style="margin-left: 5px; margin-bottom: 0px;" href="patient.php" class="button"/>
</form>
						</table>
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>
  		
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>


<script type="text/javascript">
	
	 var $table = $('#table');
		     $table.bootstrapTable({
			      url: 'list2.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
			      showFooter: true,
			      minimumCountColumns: 4,
			      columns: [{
			          field: 'num',
			          title: '#',
			          sortable: true,
			      },{
			          field: 'pid',
			          title: 'Appointment ID',
			          sortable: true,
			      },{
			          field: 'dy',
			          title: 'Day',
			          sortable: true,
			          
			      },
				  {
			          field: 'dt',
			          title: 'Date & Time',
			          sortable: true,
			          
			      },
				  {
			          field: 'pn',
			          title: 'Patient Name',
			          sortable: true,
			          
			      },
				  ],
 
  			 });

</script>
   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="../home page.php">Home</a></li>
						<li><a href="../contact.php">contact</a></li>
					</ul>
		   	</div>

		   	<div class="clear"> </div>
		   </div>
		   </div>
		</body>
		</html>