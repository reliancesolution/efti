

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

             
              
              <div class="">
				<div class="col-xs-12">
					<div class="showback">
						<div class="form-horizontal">
							<div class="content-panel">
							  <table class="table table-striped table-advance table-hover">
											  <h4 class="mb" style="text-align:center;"><i class="fa fa-file"></i> Purchased Order</h4>
											  <hr>
								  <thead>
									<tr>
                                        <th><i></i> Company Name</th>
										<th><i></i> PO Number</th>
                                        <th><i></i> Amount</th>
                                        <th><i></i> Site Code</th>
                                        <th><i></i> Site</th>
                                        <th><i></i> Nature of work</th>
                                        <th><i></i> Date</th>
										
									</tr>
								  </thead>
								  <tbody id='showDataCompany'>
									<?php if(is_array($po)): ?>
									<?php foreach($po as $res): ?>
									<tr>
										<td><?php echo $res->CompanyName; ?></td>
										<td><?php echo $res->PO_number; ?></td>
										<td><?php echo $res->PO_amount; ?></td>
                                        <td><?php echo $res->Site_code; ?></td>
										<td><?php echo $res->Site; ?></td>
										<td><?php echo $res->Nature_of_work; ?></td>
                                        <td><?php echo $res->PO_input_date; ?></td>
										
										
										<td>
											<button class="btn btn-primary btn-xs" title="Edit PO" onClick="window.location.replace('<?php echo base_url() . 'accounts/EditAccount/' . $res->	POID; ?>');"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-danger btn-xs" title="Delete PO" onClick="window.location.replace('<?php echo base_url() . 'accounts/DeleteAccount/' . $res->	POID; ?>');"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr>
									<?php endforeach; ?>
									<?php endif; ?>
									
									
									<?php if(empty($res)): ?>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>

									<?php endif; ?>
								  </tbody>
							  </table>
							
						
							 
							
						</div><!-- /content-panel -->
					</div>

                    <div class="form-horizontal">
							<div class="content-panel">
							  <table class="table table-striped table-advance table-hover">
											  <h4 class="mb" style="text-align:center;"><i class="fa fa-file"></i> Invoice</h4>
												<?php foreach($po as $pono): ?>
												<button class="btn btn-success fa fa-plus" type="button" onClick="window.location.replace('<?php echo base_url().'invoice/addNewInvoice/'.$pono->PO_number; ?>')" >Add Invoice</button>
											  <?php endforeach; ?>
												<hr>
								  <thead>
									<tr>
											<th><i></i> Invoice Number</th>
											<th><i></i> Invoice Date</th>
											<th><i></i> Billing Level</th>
											<th><i></i> Billing Amount</th>
											<th><i></i> Status</th>
									</tr>
								  </thead>
								  <tbody id='showDataCompany'>
									<?php if(is_array($invoice)): ?>
									<?php foreach($invoice as $invoiceres): ?>
									<tr>
										<td><?php echo $invoiceres->Invoice_no; ?></td>
										<td><?php echo $invoiceres->Invoice_date; ?></td>
                                        <td><?php echo $invoiceres->level; ?></td>
										<td><?php echo $invoiceres->billedAmount; ?></td>
                                        <td><?php echo $invoiceres->Status; ?></td>
                                        
								
										
										
										<td>
											<button class="btn btn-primary btn-xs" title="Edit PO" onClick="window.location.replace('<?php echo base_url() . 'accounts/EditAccount/' . $invoiceres->invoice_id; ?>');"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-danger btn-xs" title="Delete PO" onClick="window.location.replace('<?php echo base_url() . 'accounts/DeleteAccount/' . $invoiceres->invoice_id; ?>');"><i class="fa fa-trash-o"></i></button>
										</td>
									</tr>
									<?php endforeach; ?>
									<?php endif; ?>
									
									
									<?php if(empty($invoice)): ?>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
									<?php endif; ?>
								  </tbody>
							  </table>
							
						
							 
							
						</div><!-- /content-panel -->
					</div>
					</div>
				</div>
				<!-- col-lg-6-->  
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
	
    