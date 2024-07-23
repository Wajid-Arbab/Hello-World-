<div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container-fluid">
				<form method = "get" action = "/firstDashboard/applyFilter">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-3"> <a class="navbar-brand position-relative" href="#"><img class="nav-logo" src="#" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
								<div style = "background-color:black; padding-top:15px; padding-left:10px; padding-right:10px; border-radius:13px">
                                    <ul class="navbar-nav mr-auto" id = "formId">
                                        <li class="nav-item dropdown" style = "width:25%">
										<div class="form-group" >
                                            <select class="form-control" name="type" id = "type" onchange="this.form.submit();">
                                                <option value="">Select Type</option>
												<option value="apartment" <?php echo ($propertyType === "apartment") ? "selected='selected'" : "";?>>Apartment</option>
												<option value="flat" <?php echo ($propertyType === "flat") ? "selected='selected'" : "";?>>Flat</option>
												<option value="building" <?php echo ($propertyType === "building") ? "selected='selected'" : "";?>>Building</option>
												<option value="house" <?php echo ($propertyType === "house") ? "selected='selected'" : "";?>>House</option>
												<option value="villa" <?php echo ($propertyType === "villa") ? "selected='selected'" : "";?>>Villa</option>
												<option value="office" <?php echo ($propertyType === "office") ? "selected='selected'" : "";?>>Office</option>
                                            </select>
                                        </div>
										</li>
										<?php echo str_repeat('&nbsp;', 5); ?>
										
										<li class="nav-item dropdown" style = "width:27%"> 
											<div class="form-group">
												<select class="form-control" name="stype" onchange="this.form.submit();">
													<option value="">Select Status</option>
													<option value="rent" <?php echo ($saleType === "rent") ? "selected='selected'" : "";?>>Rent</option>
													<option value="sale" <?php echo ($saleType === "sale") ? "selected='selected'" : "";?>>Sale</option>
												</select>
											</div>

										</li>
										<?php echo str_repeat('&nbsp;', 5); ?>
										
                                        <li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="city" placeholder="Enter City" value = "<?php echo $city?>" onchange = "this.form.submit();">
											</div>
	
										</li>
										<?php echo str_repeat('&nbsp;', 5); ?>
										
										<li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="title" placeholder="Title" value = "<?php echo $title?>" onchange = "this.form.submit();">
											</div>
	
										</li>										
										<?php echo str_repeat('&nbsp;', 5); ?>

										<li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="bedRoom" placeholder="BedRoom" value = "<?php echo $bedRoom?>" onchange = "this.form.submit();">
											</div>
	
										</li>	
										<?php echo str_repeat('&nbsp;', 5); ?>
										
										<li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="status" placeholder="Status" value = "<?php echo $status?>" onchange = "this.form.submit();">
											</div>
	
										</li>
										<?php echo str_repeat('&nbsp;', 5); ?>
										
										<li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="bath" placeholder="Bath" value = "<?php echo $bath?>" onchange = "this.form.submit();">
											</div>
	
										</li>
										<?php echo str_repeat('&nbsp;', 5); ?>
										
										<li class="nav-item"> 
											<div class="form-group">
												<input type="text" class="form-control" name="price" placeholder="Price" value = "<?php echo $price?>" onchange = "this.form.submit();">
											</div>
	
										</li>
										<!--
										<?php echo str_repeat('&nbsp;', 5); ?>
										<li class = "nav-item" style = "width:29%">
											<div class="form-group">
												<button type="submit" style = "background-color:#0000; border-radius:7px; border:2px solid white" name="filter" class="btn btn-success w-100">Search Property</button>
											</div>
										</li>
										-->
										
                                    </ul>
                                    
                                </div>
                            </nav>
						 </div>
                    </div>
                </div>
				</form>
            </div>	
		</div>	
<br>
<!-- property section-->	
		<div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
										<?php
											if($RS->num_rows() > 0){
												foreach($RS->result() as $Row){
										?>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
											<a href = "/login">
												<div class="overlay-black overflow-hidden position-relative"><img style = "width:300px; height:300px;" src="/public/property/<?= $Row->Image?>" alt="pimage"></img>
													<?php
														if($Row->IsFeatured == 1){
													?>
													<div class="featured bg-success text-white">Featured</div>
													<?php	
														}else{
													?>
													<div class="featured bg-success text-white"></div>													
													<?php
														}
													?>
													<div class="sale bg-success text-white text-capitalize"><?= $Row->SType?></div>
													<div class="price text-primary"><b>$<?= $Row->Price?></b><span class="text-white"><?= $Row->AreaSize?> Sqft</span></div>
												</div>
											</a>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><?= $Row->PTitle?></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?= $Row->Adress?></div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?= $Row->AreaSize?></span> Sqft</li>
                                                        <li><span><?= $Row->BedRoom?></span> Beds</li>
                                                        <li><span><?= $Row->BathRoom?></span> Baths</li>
                                                        <li><span><?= $Row->Kitchen?></span> Kitchen</li>
                                                        <li><span><?= $Row->Balcony?></span> Balcony</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>By : <?= $Row->UserName?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?= date('d-m-Y', strtotime($Row->Date));?></div> 
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="row" style = "margin-right:117px;">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item">
               
					<?= $Data_link?>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
	  <!--end-->
	  <?php echo str_repeat('&nbsp;', 5);?>