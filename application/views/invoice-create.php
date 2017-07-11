

      
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
					<div class="well">
                      <div class="form-horizontal">
                          <div class="form-group">
                              <h4 class="mb" style="text-align:center;"><i class="fa fa-edit"></i> Create Invoice</h4>
							  <div class="col-sm-10">
							  <label class="control-label" for="sel1">Select Commpany (select one):</label>
							  <select class="form-control" id="txtCompanyName" name="txtCompanyName">
								<?php foreach($result as $res): ?>
								<option><?php echo $res->CompanyName; ?></option>
								<?php endforeach; ?>
								<?php if(empty($res)): ?>
								<option><?php echo "Nothing to display"; ?></option>
								<?php endif; ?>
							  </select>
							  </div>
                          </div>
						  
						  <div class="form-group">
							
								<label class="control-label" for="sel1">PO Number</label>
                                <input type="text" id="txtPO" name="txtPO" class="form-control">
                             
                          </div>
						  
						  <div class="form-group">
								<div class="col-sm-10">
									<input type="submit" class="btn btn-info pull-right" id="btnVerify" name="btnVerify" value="Verify PO">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    </script>
    <script src="<?php echo base_url('assets/jss/invoice.js') ?>"></script>
    
    