<div id="page-wrapper">
    <div class="row"> 
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('/public/images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Listed Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
					    </div>
					</div>
					<table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-dark">
                                <th class="text-white font-weight-bolder">Properties</th>
                                <th class="text-white font-weight-bolder">BHK</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Added Date</th>
								<th class="text-white font-weight-bolder">Status</th>
                                <th class="text-white font-weight-bolder">Edit</th>
								<th class="text-white font-weight-bolder">Delete</th>
                             </tr>
                        </thead>
                        <tbody>
							<?php
								if($userEnter_property->num_rows() > 0){
									foreach($userEnter_property->result_object() as $Row){
							?>
						    <tr>
                                <td>
									<img src="/public/property/<?= $Row->Image1?>" alt="pimage" style = "width:90px; height:90px;">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="/dashboard/propertydetail"></a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i> <?= $Row->Adress?></span>
                                        <div class="price mt-3">
											<span class="text-success">$ <?= $Row->Price?></span>
										</div>
                                    </div>
								</td>
                                <td><?= $Row->BHK?></td>
                                <td class="text-capitalize">For <?= $Row->SType?></td>
                                <td><?= $Row->Date?></td>
								<td class="text-capitalize"><?= $Row->Status?></td>
                                <td><a class="btn btn-info" href="/dashboard/submitpropertyupdate/<?php echo $Row->PropertyID?>">Edit</a></td>
								<td><a style = "background:red; padding-left:14px; padding-right:14px; color:white" class = "btn btn danger" href="javascript:void(0);" onclick="if(	confirm('Are you sure you want to delete?')){window.location = '/dashboard/submitpropertydelete/<?php echo $Row->PropertyID;?>';}">Delete</a></td>
								
                            </tr>
							<?php			
									}
								}
							?>
					    </tbody>
                    </table>            
            </div>
        </div>
	<!--	Submit property   -->
                
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>