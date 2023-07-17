<div id="page-wrapper">
    <div class="row"> 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container" style = "margin-right:1250px; padding-left:300px;">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                        </div>
					</div>
					<center>
					<table class="items-list col-lg-6 table-hover" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-secondary">
                                <th class="text-white font-weight-bolder">Term</th>
                                <th class="text-white font-weight-bolder">Amount</th>
                             </tr>
                        </thead>
                        <tbody>
						
						
                            <tr class="text-center font-18">
                                <td><b>Amount</b></td>
                                <td><b><?= $RS['1']?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Total Duration</b></td>
                                <td><b><?= $RS['0']?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Interest Rate</b></td>
                                <td><b><?= $RS['2']?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Total Interest</b></td>
                                <td><b><?= $RS['3']?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Total Amount</b></td>
                                <td><b><?= $RS['4']?></b></td>
                            </tr>
							<tr class="text-center">
                                <td><b>Pay Per Month (EMI)</b></td>
                                <td><b><?= $RS['5']?></b></td>
                            </tr>
							
                        </tbody>
                    </table> 
					</center>
            </div>
        </div>
		<!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 