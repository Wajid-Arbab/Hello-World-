<div id="page-wrapper">
    <div class="row"> 
        <div class="full-row">
            <div class="container" style = "padding-left:120px;";>
			<?php
				if($RS->num_rows() > 0){
					foreach($RS->result_object() as $Row){
			?>
             <?php //$Row = $RS->row(0);?>   
				<div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?= $Row->Title;?></h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content">
							<?= $Row->Content;?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img"> <img src="/public/property/<?= $Row->image;?>" alt= "about image"> </div>
                    </div>
                </div>
			<?php			
					}
				}
			?>
								
            </div>
        </div>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>