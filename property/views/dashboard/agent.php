<div id="page-wrapper">
    <div class="row"> 
        <div class="full-row">
            <div class="container">
				<div class="row"  style = "margin-left:215px;">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Agent</h2>
                     </div>
                </div>
					<?php //$Row = $RS->row(0)?>
                <div class="row" style="margin-left:210px;">
					<?php
						if($RS->num_rows() > 0){
							foreach($RS->result_object() as $Row){
					?>       
                    <div class="col-md-8 col-lg-12">
                        <div class="hover-zoomer bg-white shadow-one mb-4">
                            <div class="overflow-hidden"> <img src="/public/user/<?= $Row->UserImage?>" alt="aimage"> </div>
                            <div class="py-6 text-center">
                                <h5 class="text-secondary hover-text-success"><a href="#"><?= $Row->UserType;?></a></h5>
                                <span><?= $Row->UserName?></span> 
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

        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>