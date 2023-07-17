<div id="page-wrapper">
    <div class="row"> 
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('/public/images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row">
					<?php $Row = $RS->row(0);?>
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/public/property/<?= $Row->FloorPlanImage?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/public/property/<?= $Row->Image2?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/public/property/<?= $Row->Image2?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/public/property/<?= $Row->GoundFImage?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/public/property/<?= $Row->BasementFImage?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For <?= $Row->SType?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?= $Row->PTitle?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp; <?= $Row->Adress?></span>
							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right">$ <?= $Row->Price?></div>
                                <div class="text-left text-md-right">Price</div>
                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?= $Row->AreaSize?></span> Sqft</li>
                                    <li><span class="text-secondary"><?= $Row->BedRoom?></span> Bedroom</li>
                                    <li><span class="text-secondary"><?= $Row->BathRoom?></span> Bathroom</li>
                                    <li><span class="text-secondary"><?= $Row->Balcony?></span> Balcony</li>
                                    <li><span class="text-secondary"><?= $Row->Hall?></span> Hall</li>
                                    <li><span class="text-secondary"><?= $Row->Kitchen?></span> Kitchen</li>
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?= $Row->PTitle?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>BHK :</td>
                                            <td class="text-capitalize"><?= $Row->BHK?></td>
                                            <td>Property Type :</td>
                                            <td class="text-capitalize"><?= $Row->PType?></td>
                                        </tr>
                                        <tr>
                                            <td>Floor :</td>
                                            <td class="text-capitalize"><?= $Row->Floor?></td>
                                            <td>Total Floor :</td>
                                            <td class="text-capitalize"><?= $Row->TFloor?></td>
                                        </tr>
                                        <tr>
                                            <td>City :</td>
                                            <td class="text-capitalize"><?= $Row->City?></td>
                                            <td>State :</td>
                                            <td class="text-capitalize"><?= $Row->State?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                            <div class="row">
								<?= $Row->IsFeatured?>
                            </div>   
                            <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="/public/property/<?= $Row->FloorPlanImage?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="/public/property/<?= $Row->BasementFImage?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="/public/property/<?= $Row->GoundFImage?>" alt="Not Available"> </div>
                            </div>

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="/public/user/<?= $Row->UserImage?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?= $Row->UserName?></h6>
                                            <ul class="mb-3">
                                                <li>+92 <?= $Row->PhoneNumber?></li>
                                                <li><?= $Row->UserEmail?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
                    <div class="col-lg-4">

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
                            <button type="submit" value="submit" name="calculation" class="btn btn-danger mt-4">Calclute Instalment</button>
                        </form>
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
                        <ul class="property_list_widget">
							<?php
								if($DataIF->num_rows() > 0){
									foreach($DataIF->result_object() as $Row){				
							?>
                            <li> <img src="/public/property/<?= $Row->Image?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="/dashboard/property/<?= $Row->PropertyID?>"><?= $Row->PTitle?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?= $Row->Adress?></span>
                                
                            </li>
							<?php		
									}
								}
							?>

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently Added Property</h4>
                            <ul class="property_list_widget">
								<?php
								if($DataRA->num_rows() > 0){
									foreach($DataRA->result_object() as $Row){
								?>
								<li> <img src="/public/property/<?= $Row->Image2?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="/dashboard/propertydetail/<?= $Row->PropertyID?>"><?= $Row->PTitle?></a></h6>
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