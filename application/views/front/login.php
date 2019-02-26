<div class="row"> 
 <div class="form-body container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
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
                            <a href="login4.html" class="active">Login</a><a href="<?=base_url()?>home/register">Register</a>
                        </div>
                        <form method="POST">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
							 <select class="form-control" name="type" required >
					
					   <option value="fundseeker">Fundseeker </option>
					  <option value="investors">Investor </option>
					
					 </select>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
							
							<?php
					 if(isset($message))
					 {?>
					
					<div class="alert alert-danger">
					 <?=$message?>
					</div>
					<?php
					 }?>
					 
					 
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	