<?php 
	$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
 		$sqltran = mysqli_query($con, "SELECT * FROM patient")or die(mysqli_error($con));
		$arrVal = array();
 		
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
								'num' => $i,
 	 		 	 				'pid'=> $rowList['patient_id'],
	 		 	 				'dy'=> $rowList['day'],
								'dt'=> $rowList['date'],
	 		 	 				'pn'=> $rowList['patient_name']
 	 		 	 			);		


							array_push($arrVal, $name);	
			$i++;		
	 	}
	 		 echo  json_encode($arrVal);		
 

	 	mysqli_close($con);
?>   
 