<div id="page-wrapper">
    <div class="row"> 
        <div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-8">
                        <div class="row" style = "padding-left:90px; margin-top:33px;">
					<?php
						if($DataAP->num_rows() > 0){
							foreach($DataAP->result_object() as $Row){
					?>
								
                            <div class="col-md-6">
                                <div class="featured-thumb hover-zoomer mb-4">
                                    <div class="overlay-black overflow-hidden position-relative" style = "width:3254.5x; height:324.5px;"> <img src="/public/property/<?= $Row->Image4?>" alt="pimage">
                                        <div class="sale bg-success text-white">For <?= $Row->SType?></div>
                                        <div class="price text-primary text-capitalize"><span class="text-white"><?= $Row->AreaSize ?> Sqft</span></div>
                                        
                                    </div>
                                    <div class="featured-thumb-data shadow-one">
                                        <div class="p-4">																		<!--working in next line -->
                                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="/dashboard/propertydetail/<?php echo $Row->PropertyID?>"> <?= $Row->PTitle?></a></h5>
                                            <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?= $Row->Adress?> </span> </div>
                                        <div class="px-4 pb-4 d-inline-block w-100">
                                            <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By <span><?= $Row->UserName?></span></div>
                                            <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"> <?= $Row->Date?></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        <?php			
								}
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
                                <input type="text" class="form-control" name="amount" placeholder="Property Price" required>
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Duration Year" required>
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate" required>
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calculate Instalment</button>
                        </form>
                        </div>

                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured Property</h4>
                        <ul class="property_list_widget">
							<?php
								if($DataIF->num_rows() > 0){
									foreach($DataIF->result_object() as $Row){				
							?>
                            <li><a href = "/dashboard/propertydetail/<?= $Row->PropertyID?>"> <img src="/public/property/<?= $Row->Image1?>" alt="pimage"></a>
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="/dashboard/propertydetail/<?= $Row->PropertyID?>"><?= $Row->PTitle?></a></h6><!-- in href section write and then go to that page-->
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
								<li><a href = "/dashboard/propertydetail/<?= $Row->PropertyID?>"><img src="/public/property/<?= $Row->Image2?>" alt="pimage"></a>
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