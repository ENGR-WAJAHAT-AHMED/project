 <link href="css/maincss.css" rel="stylesheet" />
   <form action="/action_page.php">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-body card-image">
                        <div class="row">
            <div class="col heading">
                <center>
                <p>APPOINTMENT FORM</p>
                    </center> 
                </div>
                            
             </div>

            <div class="row">
            <div class="col">
              <hr class="hr1"> 
                </div>
               </div>

        
               

           <div class="row">
            <div class="col-md-6 label-text">
             <label>Doctor</label>
               <div class="form-group text-box">
			 <input class="text-box" type="text" placeholder=""  id="doc" name="text" CssClass="form-control"  Modifiers="public" required/>
               
              </div>
                    </div>
             <div class="col-md-6 label-text">
               <label>Your name</label>
                <div class="form-group text-box">
			<input class="text-box" type="text" placeholder="Enter name"  id="eml" name="text" CssClass="form-control"  Modifiers="public" required/>
                
              </div>
              
                </div>
               </div> 
            <div class="row"> 
            <div class="col-md-6  label-text">
             <label>Contact Number</label>
               <div class="form-group text-box">
			 <input class="text-box" type="text" placeholder="Your Cell Phone number"  id="eml" name="text" CssClass="form-control"  Modifiers="public" required/>
                
              </div>
                    </div>
             <div class="col-md-6 label-text ">
               <label>Your Email</label>
                <div class="form-group text-box">
				<input class="text-box" type="email" placeholder="Email"  id="eml" name="text" CssClass="form-control"  Modifiers="public" required/>
                
              </div>
              
                </div>
				</div>
				
				 <div class="row">
            <div class="col-md-4 label-text">
               <div class="form-group text-box">
			  
                
  <label for="days">Choose a day</label>
  <select name="list" id="list" type="text">
    <option value="Select">Select</option>
    <option value="mon">Monday</option>
    <option value="tue">Tuesday</option>
    <option value="wed">Wednesday</option>
	<option value="thur">Thursday</option>
	<option value="fri">Friday</option>
  </select>
  <br><br>
 

                   
                   
              </div>
           </div>
            <div class="col-md-4 label-text">
            <div class="form-group text-box">
  <label for="cars">Choose a date time</label>
  <select name="list" id="list" type="text">
    <option value="Select">Select</option>
    <option value="slot1"></option>
    <option value="slot2"></option>
    <option value="slot3"></option>
	<option value="slot4"></option>
	<option value="slot5"></option>
  </select>
  <br><br>
 
              </div>
			  </div>
                    
             <div class="col-md-4 label-text">
               <label>Appointment ID</label>
                <div class="form-group text-box">
				<input class="text-box" type="text" placeholder=""  id="apt" name="text" CssClass="form-control"  Modifiers="public" required/>
                </div>
              
                </div>
				 </div>
               </div>

                       
                         <div class="row">
                     <div class="col-md-12">
                        <center>
                           <div class="form-group text-box">
						   <input id="Button1" type="submit" value="submit" class="button btn btn-info btn-block btn-lg"/>
                              
                           </div>
                        </center>
                     </div>
                  </div>

            </div>
             
               </div>
               </div> 
                        
  
                   
            <a href="patient.php" class="home-icon" ><< <i class="fa-solid fa-house-chimney"></i></a><br><br>

            </div>
        </div>
    </div>
	</form>
	
	<?php
$doctor = $_POST['doc'];
$appoint = $_POST['apt'];
	$con = mysqli_connect("localhost","root","","project");
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 		
 		$sqltran = mysqli_query($con, "SELECT * FROM patient where patient_id='1'")or die(mysqli_error($con));
		$arrVal = array();
 		
		
 		while ($rowlist = mysqli_fetch_array($sqltran)) {
 								 
						$name = array(
				
	 		 	 				'dn'=> $rowList['doctor_name'],
	 		 	 				'id'=> $rowList['patient_id'],	
 	 		 	 			);		


							array_push($arrVal, $name);	
					
	 	}
	 		 echo  json_encode($arrVal); 
	
	?>
	<script>		 
  var 'dn' = $('#doctor').value;
  var 'id' = $('#appoint').value;
  </script>