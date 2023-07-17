<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
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
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Feedback List</h4>
									<!--<small>Here, user can select feedbacks for displaying as testimonial. Note: Status "1" sets the feedback as testimonial.</small>-->
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Feedback</th>
													<th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
												if($RS->num_rows() > 0){
													foreach($RS->result_object() as $Row){
											?>
												<tr>
													<td><?= $Row->FID?></td>
													<td><?= $Row->UserName?></td>
													<td><?= $Row->UserEmail?></td>
													<td><?= $Row->FDescription?></td>
													<td><?= $Row->Status?></td>
													<td><a href="/admin/dashboard/editFeedback/<?= $Row->FID?>"><button class="btn btn-info">Edit</button></a>
													<a href="javascript:void(0);" onclick="if(	confirm('Are you sure you want to delete?')){window.location = '/admin/dashboard/deleteFeedback/<?php echo $Row->FID;?>';}"><button class="btn btn-danger">Delete</button></a></td>
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
				
				</div>			
			</div>
			<!-- /Main Wrapper -->