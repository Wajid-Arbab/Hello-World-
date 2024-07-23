					<div class = "row">
					<form class = "col-sm-6" action="/dashboard_Controller/feedbackform/process" method="post" style = "padding:100px;">
                        <h5 class="text-secondary border-bottom-on-white pb-3 mb-4">Feedback Form</h5>
						<?php if(isset($msg) && $msg != ""){?>
							<p class="login-box-msg text-danger"><?php echo $msg;?></p>
						<?php } ?>
						<div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" style = "width:400%" name="content" rows="3" placeholder="Enter Text Here...." required></textarea>
                                </div>
                                <input type="submit" class="btn btn-info mb-4" name="insert" value="Send Feedback">
                            </div>
                            <div class="col-lg-1"></div>
							
                            <div class="col-lg-5 col-md-12">
							
                            </div>
                        </div>
					</form>

<div style = "margin-top:170px;">
<?php
if($RS->num_rows() > 0){
	foreach($RS->result_object() as $Row){
		?>
			<div style = "margin-left:100px; padding:12px; border:1px solid black;">
				<div class="mb-1 text-capitalize"><b>UserID : <?= $Row->UserID;?></div>
				<br>
				<div class="mb-1"><b>feedback : <?= $Row->FDescription;?></b></div>
			</div>
		<?php
	}
}
?>
</div>
</div>