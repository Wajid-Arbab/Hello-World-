            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">State</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">State</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
				<!-- city add section --> 
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h1 class="card-title">Add City</h1>
								</div>
								<form method="post" action = "/admin/insertionBlock/process1/<?= $CityID?>">
									<div class="card-body">
								<?php
								if($fetchCityData->num_rows() > 0){
									foreach($fetchCityData->result_object() as $Roww){
								?>
											<div class="row">
												<div class="col-xl-6">
													<h5 class="card-title">City Details</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">State Name</label>
														<div class="col-lg-9" >	
															<select class="form-control" name="ustate">
																<option value="">Select</option>
																<?php
																if($fetchStateData->num_rows() > 0){
																	foreach($fetchStateData->result_object() as $Row){
																?>
																<option value = "<?= $Row->StateID?>" class="text-captalize"><?= $Row->StateName?></option>
																<?php		
																	}
																}
																?>
																</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">City Name</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="ucity" value = "<?= $Roww->CityName?>">
														</div>
													</div>
												</div>
											</div>
								<?php		
									}
								}
								?>
								
											<div class="text-left">
												<input type="submit" class="btn btn-primary" name="insert" value = "Update" style="margin-left:200px;">
											</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!----End City add section  --->

				</div>			
			</div>