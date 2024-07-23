<div id="page-wrapper">
    <div class="row"> 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Update Property</h2>
								<?php if(isset($msg) && $msg != ""){?>
									<p class="login-box-msg text-danger"><?php echo $msg;?></p>
								<?php } ?>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
								<?php $Row = $RS->row(0);?>
                        <form method="post" enctype="multipart/form-data" action = "/dashboard_Controller/propertiesUpdation/process/<?= $Row->PropertyID?>">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title"  value="<?= $Row->PTitle?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30">
															<?= $Row->PContent?>
														</textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control"  name="ptype">
															<option value="apartment" <?php echo($Row->PType === "apartment") ? "selected = 'selected'" : "";?>>Apartment</option>
															<option value="flat" <?php echo($Row->PType === "flat") ? "selected = 'selected'" : "";?>>Flat</option>
															<option value="building" <?php echo($Row->PType === "building") ? "selected = 'selected'" : "";?>>Building</option>
															<option value="house" <?php echo($Row->PType === "house") ? "selected = 'selected'" : "";?>>House</option>
															<option value="villa" <?php echo($Row->PType === "villa") ? "selected = 'selected'" : "";?>>Villa</option>
															<option value="office" <?php echo($Row->PType === "office") ? "selected = 'selected'" : "";?>>Office</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control"  name="stype">
															<option value="rent" <?php echo($Row->SType === "rent") ? "selected = 'selected'" : "";?>>Rent</option>
															<option value="sale" <?php echo($Row->SType === "sale") ? "selected = 'selected'" : "";?>>Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bath"  value="<?php echo $Row->BathRoom?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitc"  value="<?php echo $Row->Kitchen?>">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control"  name="bhk">
															<option value="1" <?php echo($Row->BHK === "1") ? "selected = 'selected'" : "";?>>1 BHK</option>
															<option value="2" <?php echo($Row->BHK === "2") ? "selected = 'selected'" : "";?>>2 BHK</option>
															<option value="3" <?php echo($Row->BHK === "3") ? "selected = 'selected'" : "";?>>3 BHK</option>
															<option value="4" <?php echo($Row->BHK === "4") ? "selected = 'selected'" : "";?>>4 BHK</option>
															<option value="5" <?php echo($Row->BHK === "5") ? "selected = 'selected'" : "";?>>5 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bed"  value="<?= $Row->BedRoom?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balc"  value="<?= $Row->Balcony?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall"  value="<?= $Row->Hall?>">
													</div>
												</div>
												
											</div>
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control"  name="floor">
															<option value="1st Floor" <?php echo($Row->Floor === "1st Floor") ? "selected = 'selected'" : "";?>>1st Floor</option>
															<option value="2nd Floor" <?php echo($Row->Floor === "2nd Floor") ? "selected = 'selected'" : "";?>>2nd Floor</option>
															<option value="3rd Floor" <?php echo($Row->Floor === "3rd Floor") ? "selected = 'selected'" : "";?>>3rd Floor</option>
															<option value="4th Floor" <?php echo($Row->Floor === "4th Floor") ? "selected = 'selected'" : "";?>>4th Floor</option>
															<option value="5th Floor" <?php echo($Row->Floor === "5th Floor") ? "selected = 'selected'" : "";?>>5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price"  value="<?= $Row->Price?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city"  value="<?= $Row->City?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state"  value="<?= $Row->State?>">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control"  name="totalfl">
															<option value="1 " <?php echo($Row->TFloor === "1") ? "selected = 'selected'" : "";?>>1st Floor</option>
															<option value="2 " <?php echo($Row->TFloor === "2") ? "selected = 'selected'" : "";?>>2nd Floor</option>
															<option value="3 " <?php echo($Row->TFloor === "3") ? "selected = 'selected'" : "";?>>3rd Floor</option>
															<option value="4 " <?php echo($Row->TFloor === "4") ? "selected = 'selected'" : "";?>>4th Floor</option>
															<option value="5 " <?php echo($Row->TFloor === "5") ? "selected = 'selected'" : "";?>>5th Floor</option>
															<option value="6 " <?php echo($Row->TFloor === "6") ? "selected = 'selected'" : "";?>>6th Floor</option>
															<option value="7 " <?php echo($Row->TFloor === "7") ? "selected = 'selected'" : "";?>>7th Floor</option>
															<option value="8 " <?php echo($Row->TFloor === "8") ? "selected = 'selected'" : "";?>>8th Floor</option>
															<option value="9 " <?php echo($Row->TFloor === "9") ? "selected = 'selected'" : "";?>>9th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize"  value="<?= $Row->AreaSize?>">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc"  value="<?= $Row->Adress?>">
													</div>
												</div>
												
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												
												<?= $Row->Feature?>
												
											</textarea>
											</div>
										</div>
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" ="">
														<img src="/public/property/<?= $Row->Image;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" ="">
														<img src="/public/property/<?= $Row->Image1;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" ="">
														<img src="/public/property/<?= $Row->Image4;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"   name="status">
															<option value="available" <?php echo($Row->Status === "available") ? "selected = 'selected'" : "";?>>Available</option>
															<option value="sold out" <?php echo($Row->Status === "sold out") ? "selected = 'selected'" : "";?>>Sold Out</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
														<img src="/public/property/<?= $Row->BasementFImage;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" ="">
														<img src="/public/property/<?= $Row->Image1;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" >
														<img src="/public/property/<?= $Row->Image3;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
														<img src="/public/property/<?= $Row->FloorPlanImage;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
														<img src="/public/property/<?= $Row->GoundFImage;?>" alt="pimage" height="150" width="180">
													</div>
												</div>
											</div>
										</div>
										
										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isFeatured">
															<option value="0" <?php echo ($Row->IsFeatured === "0") ? "selected='selected'" : "";?>>No</option>
															<option value="1" <?php echo ($Row->IsFeatured === "1") ? "selected='selected'" : "";?>>Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Update" class="btn btn-success"name="add" style="margin-left:200px;">
											<td><a class="btn btn-info" href="/dashboard/feature/">Back</a></td>
										
									</div>
								</form>
								
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>