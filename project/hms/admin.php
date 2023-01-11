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
			
		</div>


		<div class="panel panel-success">
			<div class="panel-heading ">
<center>			
				<h1>
				CONFIRM APPOINTMENT
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
			      url: 'list3.php',
			      search: true,
			      pagination: true,
			      buttonsClass: 'primary',
			      showFooter: true,
			      minimumCountColumns: 7,
			      columns: [{
			          field: 'pid',
			          title: 'Patient ID',
			          sortable: true,
					  editable: true,
			      },{
			          field: 'pn',
			          title: 'Patient Name',
			          sortable: true,
			      },{
			          field: 'dn',
			          title: 'Doctor Name',
			          sortable: true,
			          
			      },
				  {
			          field: 'phn',
			          title: 'Phone Number',
			          sortable: true,
			          
			      },
				  {
					  
			          field: 'dt',
			          title: 'Date & Time',
			          sortable: true,
			          
			      },
{
					  
			          field: 'dy',
			          title: 'Day',
			          sortable: true,
			          
			      },
{
					  
			          field: 'et',
			          title: 'Edit',
			          sortable: true,

			          
			      },
				  ],
 
  			 });
	 /* var mydata = [{
                "id": 0,
                "num": "1",
                "dt": "$0"
              },
              {
                "id": 1,
                "num": "2",
                "dt": "$1"
              },
              {
                "id": 2,
                "num": "3",
                "dt": "$2"
              }
            ]; */
	
				 /*  {
			           field: 'dn',
			           title: 'Doctor name',
			           sortable: true,
			       },{
			           field: 'Pn',
			          title: 'Patient name',
			           sortable: true,
			          
			       },
				   {
			           field: 'cn',
			           title: 'Patient contact numbers',
			           sortable: true,
			          
			       },
				   {
					  
			           field: 'days',
			          title: 'Days',
			          sortable: true,
			          
			       },
				  {
					  
			          field: 'dt',
			          title: 'Date & time',
			          sortable: true,
			          
			      },
				  {
					  
			          field: 'id',
			          title: 'Patient ID no',
			          sortable: true,
			          
			      },
				   */
				 /*  {
                  field: 'operate',
                  title: 'Edit',
                  align: 'center',
                  valign: 'middle',
                  clickToSelect: false,
                  formatter : function(value,row,index) {
                    //return '<input name="elementname"  value="'+value+'"/>';
                    return '<button class=\'btn btn-primary \' pageName="'+row.id+'" pageDetails="'+row.dt+'"  >Edit</button> ';
				  }}, */
				  
			
  			 
			/*  $(".btn").click(function(){
				 alert('123'); */
                // var pageDetails = $(this).attr('pageDetails');
                // var pageName = $(this).attr('pageName');
                // $(".modal .modal-title").html(pageName);
                // $(".modal .modal-body").html(pageDetails);
                // $(".modal").modal("show");

            /* }); */

			 

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