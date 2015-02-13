 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Add Missions</h2>
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
                                    <h3 class="panel-title"><strong>Missions</strong></h3>
                                    
									
							   </div>
                                
                                <div class="panel-body">
                                   <div class="page-content-wrap">  
										<div class="row">
										<?php echo $this->Form->create("User", array(
                                                    "url" => array("controller" => "Missions", "action" => "add"),
                                                    "id" => "jvalidate",
                                                    "class" => "form-horizontal",
													"role" => "form",
                                                    "novalidate" => "novalidate"
                                        )); ?>
											
												<div class="col-md-12">
													<div class="form-group">
														<label class="col-md-3 col-xs-12 control-label"> Mission Name</label>
														<div class="col-md-6 col-xs-12">                                                                                                                                                        
															<input type="text" class="form-control" placeholder="Mission Name" name="mission_name" id="mission_name">                                                    
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-xs-12 control-label">Description</label>
														<div class="col-md-6 col-xs-12"> 
														  <textarea class="form-control" rows="5" placeholder="Description" name="Description"></textarea>

														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-xs-12 control-label">Demo URL</label>
														<div class="col-md-6 col-xs-12">                                                                                                                                                        
															<input type="text" class="form-control" placeholder="Demo URL" name="demo_url">                                                    
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 col-xs-12 control-label">Video URL</label>
														<div class="col-md-6 col-xs-12">                                                                                                                                                        
															<input type="text" class="form-control" placeholder="Video URL" name="video_url">                                                    
														</div>
													</div>
													<div class="col-md-12" style="text-align: center;padding-top: 13px;">
														<button class="btn btn-primary pull-center" style="min-width: 25%;" onclick="$('#jvalidate').submit()">Add Mission</button>
													</div>
												</div>
											</form>
										</div>
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
