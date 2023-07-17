            <div class="page-wrapper">
			
				<div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">About</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">About</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h2 class="card-title">About Us</h2>
								</div>
								<?php
									if($RS->num_rows() > 0){
										foreach($RS->result_object() as $Row){
								?>
								<form method="post" enctype="multipart/form-data" action = "/admin/insertionBlock/process4/<?= $Row->ID?>">
								<div class="card-body">
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="utitle" value="<?= $Row->Title?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="ucontent" rows="10" cols="30"><?= $Row->Content?></textarea>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Image</label>
													<div class="col-lg-9">
														<img src="/public/property/<?= $Row->image?>" height="100px" width="100px"><br><br>
														<input class="form-control" name="aimage" type="file" required="">
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