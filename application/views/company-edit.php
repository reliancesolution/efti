      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

             
              
			  
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Save Company</h4>
				  </div>
				  <div class="modal-body">
					Are you sure you want to Save?
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="EditSaveCompany">Save changes</button>
				  </div>
				</div>
			  </div>
			</div>
			
			<div class="modal fade" id="modal_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			  <div class="alert alert-success"><b>Sucessfully saved!</b></div>
			  </div>
			</div>
			
			<div class="modal fade" id="modalTest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			  <div class="alert alert-success"><b>Success!</b></div>
			  </div>
			</div>
			
			
			
			<div class="modal fade" id="modal_error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			  <div class="alert alert-danger"><b>Failed to save please check all the inputs!</b></div>
			  </div>
			</div>
			
			
			<div class="modal fade" id="modal_progress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			  <div class="modal-content">
				 <img alt="avatar" src="<?php echo base_url(); ?>assets/img/progress.gif" style="height:100px;weight:100px; display: block;margin: 0 auto;">
			  </div>
			  </div>
			</div>
			  
			  
			  
			  
			  
              <div class="row mt">
                 
                  <div class="col-xs-4"></div>
				  <div class="col-xs-4">
				  <div class="showback">
                        <div class="form-horizontal">
						<h4><i class="fa fa-angle-right"></i> Create Company Settings</h4>
                          <div ng-app="">
						  <div class="form-group">
							<div class="col-sm-10">
							<?php foreach($companyData as $cd): ?>
							<div class="showback">
								<label class="col-sm-10 control-label">Company Name</label>
								<input type="text" placeholder="eg. Bamacom" class="form-control input-sm" id="company_id" name="company_id" value='<?php echo $cd->CompanyId; ?>' disabled>
								<input type="text" placeholder="eg. Bamacom" class="form-control input-sm" id="company_name" name="company_name" value='<?php echo $cd->CompanyName; ?>'>
							</div>
							</div>
						  </div>
						  <div class="form-group">
							  <div class="col-xs-10">
                                  <label class="col-sm-12 control-label">Downpayment will due after days</label>
                              </div>
                              
                              <div class="col-xs-10">
								<input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="dpAft" name="dpAft" value='<?php echo $cd->DownpaymentLimitDays; ?>'>
                              </div>
                          
							  <div class="col-xs-10">
                                 <label class="col-xs-12 control-label">Progress billing will due after days</label>
                              </div>
                              
							  
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="pbAft" name="pbAft" value='<?php echo $cd->ProgressLimitDays; ?>'>
                              </div>
                          
							<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">Final billing will due after days</label>
                              </div>
                              
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="fbAft" name="fbAft" value='<?php echo $cd->FinalLimitDays; ?>'>
                              </div>
                          
							<div class="col-xs-10">
                                 <label class="col-sm-12 control-label">Retention billing will due after days</label>
						    </div>
                              
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="retAft" name="retAft" value='<?php echo $cd->RetentionLimitDays; ?>'>
                              </div>
                          </div>
						  
						  
                              <div class="form-group">
							  
								<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">% Downpayment</label>
								</div>
                                
                                <div class="col-xs-10">
                                    <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="dpPercent" name="dpPercent" value='<?php echo $cd->CompanyDownpaymentPercent; ?>'>
                                </div>
                              
								<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">% Progress</label>
								</div>
                                
                                <div class="col-sm-10">
                                    <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="pbPercent" name="pbPercent" value='<?php echo $cd->CompanyProgressPercent; ?>'>
                                </div>
                              
								<div class="col-xs-10">
									<label class="col-xs-12 control-label">% Final</label>
								</div>
                                  
                                  <div class="col-xs-10">
                                      <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="FinalPercent" name="FinalPercent" value='<?php echo $cd->CompanyFinalPercent; ?>'>
                                  </div>
                              
								<div class="col-xs-10">
									<label class="col-xs-12 control-label">% Retention</label>
								</div>
                                 
								<div class="col-xs-10">
									<input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="retPercent" name="retPercent" value='<?php echo $cd->CompanyRetentionPercent; ?>'>
									
								</div>
								
                              </div>
                            <?php endforeach; ?>
                            <div class="form-group">
                            <div class="col-xs-12"><button type="button" class="btn btn-success" id data-toggle="modal" id="btnSuccess" data-target="#myModal">Success</button></div>
                           </div>
                          </div>
                            
                      </div>
                          
                    </div>
				  
				  
				  </div>
                      
                      
                      
                  
                    
              
              <div class="row mt">
                  <div class="col-lg-4">
                      
                  </div>
                  
              </div>
          </section>
      </section>
      
       </section>

    <!-- js placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    </script>
    <script src="<?php echo base_url('assets/jss/company.js') ?>"></script>
 