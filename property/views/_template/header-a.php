<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/public/assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/public/assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="/public/assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="/public/assets/plugins/morris/morris.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="/public/assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="/public/assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="/public/assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="/public/assets/plugins/datatables/buttons.bootstrap4.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="/public/assets/css/style.css">

    </head>
    <body>		
	  <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="#" class="logo">
						<img src="/public/assets/img/rsadmin.png" alt="Logo">
					</a>
					<a href="#" class="logo logo-small">
						<img src="/public/assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				

				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">

					
					<!-- User Menu -->
					<!-- <h4 style="color:white;margin-top:13px;text-transform:capitalize;"></h4> -->
					<li class="nav-item dropdown app-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="/public/assets/img/profiles/avatar-01.png" width="31" alt="Ryan Taylor"></span>
						</a>
						
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="/public/assets/img/profiles/avatar-01.png" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="/admin/dashboard/profile">Profile</a>
							<a class="dropdown-item" href="/logout">Logout</a>
						</div>
					</li>

					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			
			<!-- header --->
			
			
			
						<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="/admin/dashboard"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							
							<!-- <li class="menu-title"> 
								<span>Authentication</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="index.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									
								</ul>
							</li> -->
							<li class="menu-title"> 
								<span>All Users</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> All Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/admin/dashboard/adminList"> Admin </a></li>
									<li><a href="/admin/dashboard/userList"> Users </a></li>
									<li><a href="/admin/dashboard/agentList"> Agent </a></li>
									<li><a href="/admin/dashboard/builderList"> Builder </a></li>
								</ul>
							</li>

							<li class="menu-title"> 
								<span>State & City</span>
							</li>
						
							<li class="submenu">
								<a href="#"><i class="fe fe-location"></i> <span>State & City</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<!--<li><a href="#"> State </a></li>-->
									<li><a href="/admin/dashboard/addCity"> City </a></li>
								</ul>
							</li>
						
							<li class="menu-title"> 
								<span>Property Management</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map"></i> <span> Property</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/admin/dashboard/addProperty"> Add Property</a></li>
									<li><a href="/admin/dashboard/viewProperty"> View Property </a></li>
									
								</ul>
							</li>
							
							
							
							<li class="menu-title"> 
								<span>Query</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-comment"></i> <span> Contact,Feedback </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/admin/dashboard/viewContact"> Contact </a></li>
									<li><a href="/admin/dashboard/viewFeedback"> Feedback </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>About</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-browser"></i> <span> About Page </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="/admin/dashboard/addAbout"> Add About Content </a></li>
									<li><a href="/admin/dashboard/viewAbout"> View About </a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
