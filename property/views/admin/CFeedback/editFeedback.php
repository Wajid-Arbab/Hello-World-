			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col" style = "margin-top:30px;">
								<h3 class="page-title">Feedback</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Feedback</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h2 class="card-title">Update Feedback</h2>
								</div>
											<?php
												if($RS->num_rows() > 0){
													foreach($RS->result_object() as $Row){
											?>
								<form method="post" action = "/admin/insertionBlock/process2/<?= $Row->FID?>">
								<div class="card-body">
										<div class="row">

											<div class="col-xl-12">
												<h5 class="card-title">Update Feedback</h5>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Feedback Id</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="fid" value="<?= $Row->FID?>" disabled>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Status</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="status" required="" value="<?= $Row->Status?>">
														<small>Enter [1] to set as testimonial & [0] to cancel it.</small>
													</div>
												</div>
											</div>
												
										</div>
										<div class="text-left">
											<input type="submit" class="btn btn-primary"  value="Update" name="update" style="margin-left:215px;">
										</div>
									</form>
											<?php			
													}
												}
											?>    
								</div>
								
							</div>
						</div>
					</div>
					
					
				</div>
			</div>