			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col"style = "margin-top:23px;">
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
								<form method="post" id="insert product" enctype="multipart/form-data" action = "/admin/insertionBlock/process">
									<div class="card-body">
											<div class="row">
												<div class="col-xl-6">
													<h5 class="card-title">City Details</h5>
													<div class="form-group row">
														<label class="col-lg-3 col-form-label">State Name</label>
														<div class="col-lg-9" >	
															<select class="form-control" name="state">
																<option value="">Select</option>
																<?php
																if($selectState->num_rows() > 0){
																	foreach($selectState->result_object() as $Row){
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
															<input type="text" class="form-control" name="city">
														</div>
													</div>
												</div>
											</div>
											<div class="text-left">
												<input type="submit" class="btn btn-primary"  value="Submit" name="insert" style="margin-left:200px;">
											</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!----End City add section  --->
				
				<!----view city  --->
				<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">City List</h4>
									
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>City</th>
													<!-- <th>State ID</th> -->
													<th>State</th>
													<th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											if($sRocord->num_rows() > 0){
												foreach($sRocord->result_object() as $Row){
											?>
											<tr>
												<td><?= $Row->CityID?></td>
												<td><?= $Row->CityName?></td>
												<td><?= $Row->StateName?></td>
												<td><a href="/admin/dashboard/editCity/<?= $Row->CityID?>"><button class="btn btn-info">Edit</button></a>
												<a href="javascript:void(0);" onclick="if(	confirm('Are you sure you want to delete?')){window.location = '/admin/dashboard/deleteUserfCity/<?php echo $Row->CityID;?>';}"><button class="btn btn-danger">Delete</button></a></td>
											</tr>
											<?php		
												}
											}
											?>
								
                        
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				<!-- view City -->
				</div>			
			</div>