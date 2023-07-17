<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>		 		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<?php if(isset($msg) && $msg != ""){?>
									<p class="login-box-msg text-danger"><?php echo $msg;?></p>
								<?php } ?>
								<!-- Form -->
								<form method="post" action = "/register/process" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text"  name="name" class="form-control" placeholder="Your Name*" required>
									</div>
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder="Your Email*"required>
									</div>
									<div class="form-group">
										<input type="text"  name="phone" class="form-control" placeholder="Your Phone*" maxlength="11"required>
									</div>
									<div class="form-group">
										<input type="password" name="pass"  class="form-control" placeholder="Your Password*"required>
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="user" >User
									  </label>
									</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="agent">Agent
									  </label>
									</div>
									<div class="form-check-inline disabled">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="builder">Builder
									  </label>
									</div> 
									
									<div class="form-group">
										<label class="col-form-label"><b>User Image</b>
											<input class="form-control" name="userimage" type="file"required>
										</label>
									</div>
									
									<button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
								
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="/login">Login</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--	login  -->