<?php
include("header2.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Choose Your Task</p>
                    <h2>Our Best Services</h2>
                </div>
                <div class="row">
                   
				   
				   
				   
				   
				    <div class="col-md-6">
                        <div class="contact-form">
				   
				   
				   
				   <form action='reginsert.php' method='post' novalidate="novalidate">
				   
				   
				   
				   	<?php
				  if($_REQUEST['a']==1)
				  echo "<div class='alert alert-danger'>REGISTERED SUCCESSFUL ...</div>";
				  ?>
                            <div id="success"></div>
                           



						   
                              <div class="control-group">
                                    <input type="text" class="form-control" id="name" name='name' placeholder="Enter Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>  



							   <div class="control-group">
                                    <input type="text" class="form-control" id="name" name='username' placeholder="Your Username" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" id="email" name='password' placeholder="Your Password" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
								
								<select class="form-control" name='course'>
								<option>Select Course</option>
								<option>UG</option>
									<option>PG</option>
								</select>
								
                                     <p class="help-block text-danger"></p>
                                </div>
								
                               
                                <div>
								<input type='submit' value='Register' name='Register'>
                                 
                                </div>
								
								
								
								
                           
                        </div>
						
						
						
						
						
						
						
						
						  <div class="col-md-6">
                        <div class="contact-form">
						
						<?php
						
						
						
						
						
						?>
						</div>
						</div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                    </div>
					
					
					
					
					
					
					
					
					  
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
				
				
				
				
				
				 </form>
				
				
				
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        


        <!-- Footer Start -->
       
<?php
include("footer.php");

?>