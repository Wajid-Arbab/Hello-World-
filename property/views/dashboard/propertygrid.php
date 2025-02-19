<div id="page-wrapper">
    <div class="row"> 
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('/public/images/breadcromb.jpg'); width:1700px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Filter Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Filter Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
        
        <!--	Property Grid
		===============================================================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<div class="col-lg-8">
                        <div class="row">
								<?php
									if($RS->num_rows() > 0){
										foreach($RS->result_object() as $Row){
								?>
								
                            <div class="col-md-6">
                                <div class="featured-thumb hover-zoomer mb-4">
                                    <div class="overlay-black overflow-hidden position-relative"> <img style = "width:300px; height:300px;" src="/public/property/<?= $Row->Image?>" alt="pimage">
                                        
                                        <div class="sale bg-success text-white">For <?= $Row->SType?></div>
                                        <div class="price text-primary text-capitalize">$<?= $Row->Price?><span class="text-white"><?= $Row->AreaSize?> Sqft</span></div>
                                        
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="/dashboard/propertydetail/<?= $Row->PropertyID?>"><?= $Row->PTitle?></a></h5>
                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?= $Row->Adress?></span> </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By :  <?= $Row->UserName?></div>
                                            <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i><?= date('d-m-Y', strtotime($Row->Date));?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
								<?php		
										}
									}else{
										echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
									}
								?>
                            

                        </div>
                    </div>
					
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Instalment Calculator</h4>
						<form class="d-inline-block w-100" action="/dashboard_Controller/Instalmentcalculation/calculation" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calculate Instalment</button>
                        </form>
                        </div>
                        
                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
							<?php
								if($RAdd->num_rows() > 0){
									foreach($RAdd->result_object() as $Row){
							?>
							 <li> <img src="/public/property/<?= $Row->Image?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="/dashboard/propertydetail<?= $Row->PropertyID?>"><?= $Row->PTitle?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?= $Row->Adress?></span>
                                    
                                </li>
							<?php			
									}
								}
							?>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>