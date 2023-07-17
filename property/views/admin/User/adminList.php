            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col"style = "margin-top:23px;">
								<h3 class="page-title">Admin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Admin</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Admin List</h4>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											if($RS->num_rows() > 0){
												foreach($RS->result_object() as $Row){
											?>
											
								                <tr>
                                                    <td><?= $Row->UserID?></td>
                                                    <td><?= $Row->UserName?></td>
                                                    <td><?= $Row->UserEmail?></td>
                                                    <td><?= $Row->Role?></td>
                                                    <td><?= $Row->PhoneNumber?></td>
                                                    <td><a href="javascript:void(0);" onclick="if(	confirm('Are you sure you want to delete?')){window.location = '/admin/dashboard/deleteUser/<?php echo $Row->UserID;?>';}"><button class="btn btn-danger">Delete</button></a></td>
                                                </tr> 
                                            </tbody>
											<?php		
												}
											}
											?>
                                        </table>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>