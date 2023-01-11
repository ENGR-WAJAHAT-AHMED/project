<?php 
	$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
 	$sqltran1 = mysqli_query($con, "SELECT * FROM user")or die(mysqli_error($con));
		$arrVal1 = array();
 		
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran1)) {
 								 
						$name1 = array(
								'num' => $i,
 	 		 	 				'doctor'=> $rowList['fname'],
	 		 	 				'day'=> $rowList['day'],
								'available'=> $rowList['available'],
	 		 	 				
 	 		 	 			);		


							array_push($arrVal1, $name1);	
			$i++;		
	 	}
	 		 echo  json_encode($arrVal1); 

 	 	/* $sqltran2 = mysqli_query($con, "SELECT * FROM link")or die(mysqli_error($con));
		$arrVal2 = array();
 		
	
 		while ($rowList = mysqli_fetch_array($sqltran2)) {
 								 
						$name2 = array(
								
	 		 	 				'link1'=> $rowList['link_name']
 	 		 	 			);		


							array_push($arrVal2, $name2);	
					
	 	}
	 		 echo  json_encode($arrVal2);				 
  
 */
	 	mysqli_close($con);
?>   
 