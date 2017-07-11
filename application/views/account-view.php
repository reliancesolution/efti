      
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
			  
			<div class="">
				<div class="col-xs-12">
					<div class="showback">
						<div class="form-horizontal">
							<div class="content-panel">
							  <table class="table table-striped table-advance table-hover">
											  <h4 class="mb" style="text-align:center;"><i class="fa fa-users"></i> Users</h4>
											  <hr>
								  <thead>
									<tr>
										<th><i></i> Username</th>
										<th><i></i> Password</th>
										<th><i></i> Name</th>
										
									</tr>
								  </thead>
								  <tbody id='showDataCompany'>
									<?php if(is_array($results)): ?>
									<?php foreach($results as $res): ?>
									<tr>
										<td><?php echo $res->account_username; ?></td>
										<td><?php echo $res->account_password; ?></td>
										<td><?php echo $res->account_name; ?></td>
										
										<td>
											<button class="btn btn-primary btn-xs" title="Edit Company Settings" onClick="window.location.replace('<?php echo base_url() . 'accounts/EditAccount/' . $res->account_id; ?>');"><i class="fa fa-pencil"></i></button>
											<button class="btn btn-danger btn-xs" title="Delete Company" onClick="window.location.replace('<?php echo base_url() . 'accounts/DeleteAccount/' . $res->account_id; ?>');"><i class="fa fa-trash-o"></i></button>
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
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
										<td><?php echo 'Nothing to display'; ?></td>
									<?php endif; ?>
								  </tbody>
							  </table>
							
						
							  <?php echo $links;?>
							
						  </div><!-- /content-panel -->
					</div>
					</div>
				</div>
				<!-- col-lg-6-->  
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
    <script src="<?php echo base_url('assets/jss/account.js') ?>"></script>
 