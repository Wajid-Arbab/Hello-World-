            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col" style = "margin-top:25px;">
								<h3 class="page-title">Property</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Property</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-4">Property View</h4>
					                      <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <!-- <th>P ID</th> -->
                                                    <th>Title</th>
                                                    <th>Type</th>
                                                    <th>BHK</th>
                                                    <th>S/R</th>
                                                   
													<th>Area</th>
                                                    <th>Price</th>
                                                    <th>Location</th>
													<th>Status</th>
                                                   
                                                    
                                                    <th>Added Date</th>
                                                    <th>Actions</th>
                                                    
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
												<?php
													if($RS->num_rows() > 0){
														foreach($RS->result_object() as $Row){
												?>
					                            <tr>
													<td><?= $Row->PTitle?></td>
													<td><?= $Row->PType?></td>
													<td><?= $Row->BHK?></td>
													<td><?= $Row->SType?></td>
													
													<td><?= $Row->AreaSize?></td>
													<td><?= $Row->Price?></td>
													<td><?= $Row->Adress?></td>
													<td><?= $Row->Status?></td>
													
													<td><?= $Row->Date?></td>
													<td><a href="/admin/dashboard/editProperty/<?= $Row->PropertyID?>"><button class="btn btn-info">Edit</button></a>
													<a href="javascript:void(0);" onclick="if(	confirm('Are you sure you want to delete?')){window.location = '/admin/dashboard/deleteProperyThroughAdmin/<?php echo $Row->PropertyID;?>';}"><button class="btn btn-danger">Delete</button></a></td>
												</tr>
												<?php		
														}
													}
												?>
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
					
				</div>			
			</div>