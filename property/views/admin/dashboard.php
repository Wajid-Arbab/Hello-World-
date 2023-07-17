			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12"style = "margin-top:23px;">
								<h3 class="page-title">Welcome Admin!</h3>
								<p></p>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/userList">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-users"></i>
										</span>
										</a>
										
									</div>
									<div class="dash-widget-info">
										
										<h3><?= $totalUser->num_rows();?></h3>
										
										<h6 class="text-muted">Registered Users</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
									<a href = "/admin/dashboard/agentList">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-users"></i>
										</span>
									</a>	
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $RS->num_rows();?></h3>
										
										<h6 class="text-muted">Agents</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/builderList">
										<span class="dash-widget-icon bg-danger">
											<i class="fe fe-user"></i>
										</span>
										</a>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalBuilder->num_rows();?></h3>
										
										<h6 class="text-muted">Builder</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/viewProperty">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-home"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalProperty->num_rows();?></h3>
										
										<h6 class="text-muted">Properties</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/totalApartment">
										<span class="dash-widget-icon bg-warning">
											<i class="fe fe-table"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalApartment->num_rows();?></h3>
										
										<h6 class="text-muted">No. of Apartments</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/totalHouse">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-home"></i>
										</span>
										</a>
										
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalHouse->num_rows();?></h3>
										
										<h6 class="text-muted">No. of Houses</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/totalBuilding">
										<span class="dash-widget-icon bg-secondary">
											<i class="fe fe-building"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalBuilding->num_rows();?></h3>
										
										<h6 class="text-muted">No. of Buildings</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/totalFlat">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-tablet"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $totalFlat->num_rows();?></h3>
										
										<h6 class="text-muted">No. of Flat</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/onSale">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-quote-left"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $onSale->num_rows();?></h3>
										
										<h6 class="text-muted">On Sale</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<a href = "/admin/dashboard/onRent">
										<span class="dash-widget-icon bg-info">
											<i class="fe fe-quote-right"></i>
										</span>
										</a>
									</div>
									<div class="dash-widget-info">
										
									<h3><?= $onRent->num_rows();?></h3>
										
										<h6 class="text-muted">Rentals</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-info w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-md-12 col-lg-6">
						
							
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Sales Overview</h4>
								</div>
								<div class="card-body">
									<div id="morrisArea"></div>
								</div>
							</div>
							
							
						</div>
						<div class="col-md-12 col-lg-6">
						
							
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Order Status</h4>
								</div>
								<div class="card-body">
									<div id="morrisLine"></div>
								</div>
							</div>
							
							
						</div>	
					</div> -->
				</div>			
			</div>
			<!-- /Page Wrapper -->