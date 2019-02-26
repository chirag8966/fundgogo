<div class="row">
    <div class="form-body" class="container-fluid">
       
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="<?=base_url()?>assets/images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="<?=base_url()?>home/login">Login</a><a href="register4.html" class="active">Register</a>
                        </div>
                       <form method="POST">
		    <div class="col-md-12">
			     <input type="hidden" name="type" value="fundseeker">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
            </div>
			
			  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
				</div>	
					
					<div class="col-md-12">
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required data-error="Please enter your password">
                      <div class="help-block with-errors"></div>
                    </div>
					</div>

					<div class="col-md-12">
                    <div class="form-group">
                      <input type="password" class="form-control" id="Cpassword" name="cpassword" placeholder="Confirm Password" required data-error="Please enter your password">
                      <div class="help-block with-errors"></div>
                    </div>
					</div>
					
					
					
					<div class="col-md-12">
                    <div class="form-group">
                      <input type="tel"    class="form-control" id="Phone" name="contact" placeholder="Phone (Optional)"  data-error="Please enter your Phone No'">
                      <div class="help-block with-errors"></div>
                    </div>
					</div>
					
					
					
					<div class="col-md-12">
                    <div class="form-group">
                     <select class="form-control" name="type" required data-error="Please enter your password">
					  <option selected disabled>Select Account Type</option>
					  <option value="fundseeker">Fundseeker </option>
					  <option value="investors">Investor </option>
					 
					 </select>
                      <div class="help-block with-errors"></div>
                    </div>
					</div>
					

                <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Sign Up</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
					
					<?php
					 if(isset($message))
					 {?>
					
					<div class="alert alert-info">
					 <?=$message?>
					</div>
					<?php
					 }?>
               </form>	
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>