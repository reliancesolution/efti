

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Save PO</h4>
				  </div>
				  <div class="modal-body">
					Are you sure you want to Save?
					
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" name="btnSaveInvoice" id="btnSavePo">Save</button>
				  </div>
				</div>
			  </div>
			</div>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

             
              
              <div class="row mt">
                <div class="col-lg-4">
                        
				</div><!-- col-lg-6-->  
                  <div class="col-lg-4">
                    <div class="showback">
                      <div class="form-horizontal">
                           
                           <div class="form-group">
                              <h4 class="mb" style="text-align:center;"><i class="fa fa-edit"></i> Create PO</h4>
							  <div class="col-sm-10">
							  <label class="control-label" for="sel1">Select Commpany (select one):</label>
							  <select class="form-control" id="txtCompanyName" name="txtCompanyName">
								<?php foreach($companyData as $res): ?>
								<option><?php echo $res->CompanyName; ?></option>
								<?php endforeach; ?>
								<?php if(empty($res)): ?>
								<option><?php echo "Nothing to display"; ?></option>
								<?php endif; ?>
							  </select>
							  </div>
                          </div>

						   <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PO No.</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="txtPO" name="txtPO" value="<?php echo $Data_PO; ?>">
							  </div>
                          </div>
                              
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" id="txtDate" name="txtDate">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Site Code</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="txtSiteCode" name="txtSiteCode">
                              </div>
                          </div>
                          
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Site</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="txtSite" name="txtSite">
                              </div>
                          </div>
						  
						  <div class="form-group">
							  <label class="col-sm-2 col-sm-2 control-label" >Nature of Work</label>
							  <div class="col-sm-10">
								  <textarea class="form-control custom-control" rows="3" style="resize:none" id="txtNatureOfWork" name="txtNatureOfWork"></textarea>
							  </div>
						  </div>
						  
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PO Amount</label>
                               <div class="col-sm-10">
                                  <input type="text" class="form-control" id="txtPOAmount" name="txtPOAmount">
                              </div>
                          </div>
						  			  
						<!--<div class="form-group">
							<div class="col-sm-10">
							 <h4>Payment Setting</h4>
							  <div class="checkbox">
								  <label class=""><input type="checkbox" name="chck_dp" id="chck_dp" class=""> Downpayment</label>
							  </div>
							  
							  <div class="checkbox">
								  <label class=""><input type="checkbox" name="chck_pb" id="chck_pb" class="">Progress Billing</label>
							  </div>
							  <div class="checkbox">
								  <label class=""><input type="checkbox" name="chck_fb" id="chck_fb" class="">Final Billing</label>
							  </div>
							  <div class="checkbox">
								  <label class=""><input type="checkbox" name="chck_ret" id="chck_ret" class="">Retention </label>
							  </div>
							</div>
						</div>-->
						  
						  
						  <div class="form-group">
							  <div class="col-sm-10">
								<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Save</button>
							  </div>
						  </div>
                      </div>
                  
					</div>  
                   
                    </div><!-- col-lg-6-->
					
                    <div class="col-lg-4">
                        
                    </div><!-- col-lg-6-->  
              </div>
              
              <div class="row mt">
                  <div class="col-lg-6">
                      
                  </div>
                  
              </div>
          </section>
      </section>

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    
	
	<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    </script>
    <script src="<?php echo base_url('assets/jss/invoice.js') ?>"></script>
	
    