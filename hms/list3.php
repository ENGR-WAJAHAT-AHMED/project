

<?php
$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
 	$sqltran = mysqli_query($con, "SELECT * FROM patient")or die(mysqli_error($con));
		$arrVal = array();
 		
		
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								
 	 		 	 				'pid'=> $rowList['patient_id'],
	 		 	 				'pn'=> $rowList['patient_name'],
								'dn'=> $rowList['doctor_name'],
                                'phn'=> $rowList['ph_number'],
                                'dt'=> $rowList['date'],
                                'dy'=> $rowList['day'],  
	 		 	 				
 	 		 	 			);		


							array_push($arrVal, $name);	
				
	 	}
	 		 echo  json_encode($arrVal); 

mysqli_close($con);
?>