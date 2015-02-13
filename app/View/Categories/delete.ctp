 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Category</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
							<?php echo $this->Session->flash(); ?>
                                <div class="panel-body">
                            <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Category List</strong></h3>
                                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_basic">Add New Category <span class="fa fa-floppy-o fa-right"></span></button>
									
							   </div>
                                
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table datatable_simple">
                                            <thead>
                                                <tr>
                                                    <th>Category Id</th>
                                                    <th>Category Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php
													foreach($categories as $category){
														echo '<tr>';
														echo '<td> '.$category['Category']['Id'].'</td>';
														echo '<td>'.$category['Category']['categoryname'].'</td>';
														echo '<td>';
														echo '<a href="#" Title='.$category['Category']['categoryname'].' id='.$category['Category']['Id'].' class="ledit"><span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#modal_basic1"></span></a>';
														echo '<a href="#" Title='.$category['Category']['categoryname'].' id='.$category['Category']['Id'].' class="ledit"><span class="glyphicon glyphicon-remove" data-toggle="modal" data-target="#modal_basic2"></span></a>';
														echo '</td>';
													echo '</tr>';
													}
												?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SIMPLE DATATABLE -->
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
		<!-- Add Category -->
		<div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Add New Category </h4>
                    </div>
                    <div class="modal-body">
                        <div class="page-content-wrap">  
							<div class="row">
							
							 <?php echo $this->Form->create("User", array(
                                                    "url" => array("controller" => "categories", "action" => "add"),
                                                    "id" => "jvalidate",
                                                    "role" => "form",
                                                    "novalidate" => "novalidate"
                                        )); ?>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Category Name</label>
									<div class="col-md-12 col-xs-12">                                                                                                                                                        
										<input type="text" class="form-control" placeholder="Category Name" name="name">                                                    
									</div>
								</div>
								<div class="col-md-12" style="text-align: center;padding-top: 13px;">
									
									<button class="btn btn-primary pull-center" onclick="$('#jvalidate').submit()">Submit</button>
								</div>
								</form>
							</div>
						</div>
						
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		<!-- edit Category -->
		<div class="modal" id="modal_basic1" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Edit Category </h4>
                    </div>
                    <div class="modal-body">
                        <div class="page-content-wrap">  
							<div class="row">
							<?php echo $this->Form->create("User", array(
                                                    "url" => array("controller" => "categories", "action" => "edit"),
                                                    "id" => "jvalidate",
                                                    "role" => "form",
                                                    "novalidate" => "novalidate"
                                        )); ?>
								<div class="form-group">
									<label class="col-md-3 col-xs-12 control-label">Category Name</label>
									<div class="col-md-12 col-xs-12">                                                                                                                                                        
										<input type="text" class="form-control" placeholder="Category Name" name="Category_ame" id="Category_ame">                                                    
									</div>
								</div>
								<div class="form-group" style="display:none">
									<label class="col-md-3 col-xs-12 control-label">id</label>
									<div class="col-md-12 col-xs-12">                                                                                                                                                        
										<input type="text" class="form-control" placeholder="Category Name" name="Category_id" id="Category_id">                                                    
									</div>
								</div>
								<div class="col-md-12" style="text-align: center;padding-top: 13px;">
									<button class="btn btn-primary pull-center" style="min-width: 25%;">Save</button>
								</div>
								</form>
							</div>
						</div>
						
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		<!-- Add Category -->
		<div class="modal" id="modal_basic2" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Delete Category </h4>
                    </div>
                    <div class="modal-body">
                        <div class="page-content-wrap">  
							<div class="row">
								 <p>Are you sure you want to Delete?</p>
								 <?php echo $this->Form->create("User", array(
                                                    "url" => array("controller" => "categories", "action" => "delete"),
                                                    "id" => "jvalidate",
                                                    "role" => "form",
                                                    "novalidate" => "novalidate"
                                        )); ?>
								<div class="form-group" style="display:none">
									<label class="col-md-3 col-xs-12 control-label">Category Name</label>
									<div class="col-md-12 col-xs-12">                                                                                                                                                        
										<input type="text" class="form-control" placeholder="Category Name" name="Category_ame1" id="Category_ame1">                                                    
									</div>
								</div>
								<div class="form-group" style="display:none">
									<label class="col-md-3 col-xs-12 control-label">id</label>
									<div class="col-md-12 col-xs-12">                                                                                                                                                        
										<input type="text" class="form-control" placeholder="Category Name" name="Category_id1" id="Category_id1">                                                    
									</div>
								</div>
								<div class="col-md-12" style="text-align: center;padding-top: 13px;">
									<button class="btn btn-primary pull-center" style="min-width: 25%;">Delete</button>
								</div>
								</form>
							</div>
						</div>
						
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
		<!-- END PAGE CONTENT -->
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
$( document ).ready(function() {
    $('.ledit').click(function() {
												
				var vide = $(this).attr("Title");
				var ide = $(this).attr("id");
				
				$("#Category_ame").val(vide);
				$("#Category_id").val(ide);
				$("#Category_ame1").val(vide);
				$("#Category_id1").val(ide);
				
				
				// $( "#Category_Name" ).val(vide);
				//alert(vide);
	});
				
});
</script>