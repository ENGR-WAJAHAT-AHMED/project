
 
<html>
	<head>
		<title>Patient</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
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
			
		</div>


		<div class="panel panel-success">
			<div class="panel-heading ">
<center>			
				<h1>
				BOOK YOUR DOCTOR APPOINTMENT
			</h1>
			 	</center> 
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					 
						<table 	id="table"
			                	data-show-columns="true"
 				                data-height="460">
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
			      url: 'list1.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
			      showFooter: true,
			      minimumCountColumns: 4,
			      columns: [{
			          field: 'num',
			          title: '#',
			          sortable: true,
					  editable: true,
			      },{
			          field: 'doctor',
			          title: 'Doctors',
			          sortable: true,
			      },{
			          field: 'day',
			          title: 'Days',
			          sortable: true,
			          
			      },
				  {
			          field: 'available',
			          title: 'Avalability',
			          sortable: true,
			          
			      },
				  {
					  
			          field: 'link1',
			          title: 'link',
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



