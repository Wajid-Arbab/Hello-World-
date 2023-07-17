<div id="page-wrapper">
    <div class="row"> 
         <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('/public/images/breadcromb.jpg'); width:1700px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Profile</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Profile</h2>
                        </div>
					</div>
                <div class="dashboard-personal-info p-5 bg-white">
                    <form action="/dashboard_Controller/feedbackform/process" method="post">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback Form</h5>
						<?php if(isset($msg) && $msg != ""){?>
							<p class="login-box-msg text-danger"><?php echo $msg;?></p>
						<?php } ?>
						<div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="user-id">Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                                </div>                
                                
                                <div class="form-group">
                                    <label for="phone">Contact Number</label>
                                    <input type="number" name="phone"  class="form-control" placeholder="Enter Phone" maxlength="10" required>
                                </div>

                                <div class="form-group">
                                    <label for="about-me">Your Feedback</label>
                                    <textarea class="form-control" name="content" rows="7" placeholder="Enter Text Here...." required></textarea>
                                </div>
                                <input type="submit" class="btn btn-info mb-4" name="insert" value="Send Feedback">
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 col-md-12">
							<?php
								if($RS->num_rows() > 0){
									foreach($RS->result_object() as $Row){
							?>
								<?php //$Row = $RS->row(0);?>
							    <div class="user-info mt-md-50"> <img style = "width:200px; border-radius:100px; height:300px;" src="/public/user/<?= $Row->UserImage;?>" alt="userimage">
                                    <div class="mb-4 mt-3">
                                        
                                    </div>
									
                                    <div class="font-18">
                                        <div class="mb-1 text-capitalize"><b>Name : <?= $Row->UserName;?></b></div>
                                        <div class="mb-1"><b>Email : <?= $Row->UserEmail;?></b></div>
                                        <div class="mb-1"><b>Contact : <?= $Row->PhoneNumber;?></b></div>
										<div class="mb-1 text-capitalize"><b>Role : <?= $Row->UserType;?></b></div>
                                    </div>
                                </div>
							<?php			
									}
								}
							?>
                            </div>
                        </div>
					</form>
				</div>
                    
               </div>            
            </div>
	<!--	Submit property   -->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>