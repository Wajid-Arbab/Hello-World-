            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col" style = "margin-top:25px;">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					<?php
						if($RS->num_rows() > 0){
							foreach($RS->result_object() as $Row){
					?>
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="/public/user/<?= $Row->UserImage?>">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-2 text-uppercase"><?= $Row->UserName?></h4>
										<h6 class="text-muted"><?= $Row->UserEmail?></h6>
										<div class="user-Location"><i class="fa fa-id-badge" aria-hidden="true"></i>
										<?= $Row->PhoneNumber?>
										</div>
										<div class="about-text"><?= $Row->Role?></div>
									</div>

								</div>
							</div>
								<!--	<li class="nav-item">
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
								</ul>
							</div>	
									</li>  -->
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-9">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
														<p class="col-sm-9"><?= $Row->UserName?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Status</p>
														<p class="col-sm-9"><?= $Row->status?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-9"><?= $Row->UserEmail?><a href="#"></a></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-9"><?= $Row->PhoneNumber?></p>
													</div>
													
												</div>
											</div>
										</div>

										<div class="col-lg-3">
											
											<!-- Account Status -->
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Account Status</span>
														
													</h5>
													<?php
														if($Row->status == 1){
													?>
													<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
													<?php		
														}else{
													?>
													<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> InActive</button>
													<?php		
														}
													?>
												</div>
											</div>
											<!-- /Account Status -->

											
										</div>
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<!--<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form method="post">
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>  -->
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					<?php			
							}
						}
					?>
					</div>
				</div>			
			</div>