      
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
					<button type="button" class="btn btn-primary" id="SaveCompany">Save changes</button>
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
						<h4 class="mb" style="text-align:center;"><i class="fa fa-briefcase"></i> Create Company Settings</h4>
                          <div ng-app="">
						  <div class="form-group">
							<div class="col-sm-10">
							<div class="showback">
								<label class="col-sm-10 control-label">Company Name</label>
								<input type="text" placeholder="eg. Bamacom" class="form-control input-sm" id="company_name" name="company_name">
							</div>
							</div>
						  </div>
						  <div class="well">
						  <div class="form-group">
							  <div class="col-xs-10">
                                  <label class="col-sm-12 control-label">Downpayment will due after days</label>
                              </div>
                              
                              <div class="col-xs-10">
								<input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="dpAft" name="dpAft">
                              </div>
                          
							  <div class="col-xs-10">
                                 <label class="col-xs-12 control-label">Progress billing will due after days</label>
                              </div>
                              
							  
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="pbAft" name="pbAft">
                              </div>
                          
							<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">Final billing will due after days</label>
                              </div>
                              
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="fbAft" name="fbAft">
                              </div>
                          
							<div class="col-xs-10">
                                 <label class="col-sm-12 control-label">Retention billing will due after days</label>
						    </div>
                              
                              <div class="col-xs-10">
                                  <input type="number" placeholder="eg. 60 days" class="form-control input-sm" id="retAft" name="retAft">
                              </div>
                          </div>
						  
						  
                              <div class="form-group">
							  
								<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">% Downpayment</label>
								</div>
                                
                                <div class="col-xs-10">
                                    <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="dpPercent" name="dpPercent">
                                </div>
                              
								<div class="col-xs-10">
                                 <label class="col-xs-12 control-label">% Progress</label>
								</div>
                                
                                <div class="col-sm-10">
                                    <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="pbPercent" name="pbPercent">
                                </div>
                              
								<div class="col-xs-10">
									<label class="col-xs-12 control-label">% Final</label>
								</div>
                                  
                                  <div class="col-xs-10">
                                      <input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="FinalPercent" name="FinalPercent">
                                  </div>
                              
								<div class="col-xs-10">
									<label class="col-xs-12 control-label">% Retention</label>
								</div>
                                 
								<div class="col-xs-10">
									<input type="number" placeholder="eg. 60 %" class="form-control input-sm" id="retPercent" name="retPercent">
									
								</div>
								
                              </div>
                             </div>
                            <div class="form-group">
                            <div class="col-xs-12"><button type="button" class="btn btn-success pull-right" id data-toggle="modal" id="btnSuccess" data-target="#myModal">Success</button></div>
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
 