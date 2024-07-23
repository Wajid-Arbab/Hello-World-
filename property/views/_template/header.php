<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="/public/images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="/public/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/public/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="/public/css/color.css">
<link rel="stylesheet" type="text/css" href="/public/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/public/fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="/public/css/style.css">
<link rel="stylesheet" type="text/css" href="/public/css/login.css">
			
<!-- Datatables CSS -->
<link rel="stylesheet" href="/public/assets/plugins/datatables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/public/assets/plugins/datatables/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/public/assets/plugins/datatables/select.bootstrap4.min.css">
<link rel="stylesheet" href="/public/assets/plugins/datatables/buttons.bootstrap4.min.css">

  <link href="assets/css/style.css" rel="stylesheet">
<!--	Title
	=========================================================-->

<title>Online Market Place</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="top-contact list-text-white  d-table">
                                <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>+92 3150006966</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>xpwajid.pk@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="top-contact float-right">
                                <ul class="list-text-white d-table">
								<li><i class="fas fa-user text-success mr-1"></i>
								<?php  if(isset($_SESSION['uemail']))
								{ ?>
								<a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
								<a href="/login">Login</a>&nbsp;&nbsp;
								
								| </li>
								<li><i class="fas fa-user-plus text-success mr-1"></i><a href="/register"> Register</li><?php } ?>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="#"><img class="nav-logo" src="/public/images/logo/restatelg.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"><a class="nav-link" href="/firstDashboard" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>
										
										<li class="nav-item"> <a class="nav-link" href="/firstDashboard/about">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="/firstDashboard/contact">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="/firstDashboard/applyFilter">Properties</a> </li>
                                        
                                        <li class="nav-item"> <a class="nav-link" href="/firstDashboard/agent">Agent</a> </li>
										
                                    </ul>
                                    
									
									<a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="/firstDashboard/submitproperty">Submit Peoperty</a> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
		