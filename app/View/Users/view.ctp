
 <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Layouts</a></li>
                    <li class="active">Navigation Top</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Brands</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                            <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Brands</strong></h3>
                                    <button class="btn btn-primary pull-right">Add New Brand <span class="fa fa-floppy-o fa-right"></span></button>
                                </div>
                                <div class="panel-body">
                                    <form class="form-inline">
                                     <div class="form-group">
                                        <label class="control-label">Search Brand</label>
                                        <input type="text" name="search-brand" class="form-control" placeholder="Search Brand"/>
                                     </div>
                                    <div class="form-group">                                
                                        <label class="check"><input type="checkbox" class="icheckbox"/> Facebook</label>
                                    </div>
                                    <div class="form-group">                                
                                        <label class="check"><input type="checkbox" class="icheckbox"/> Twitter</label>
                                    </div>
                                    <div class="form-group">                                
                                        <label class="check"><input type="checkbox" class="icheckbox"/> Instagram</label>
                                    </div>
                                    <div class="form-group">                                
                                        <label class="check"><input type="checkbox" class="icheckbox"/> Linkden</label>
                                    </div>
                                    <div class="form-group">                                     
                                            <select class="form-control select">
                                                <option>Category</option>
                                                
                                                <?php foreach( $categories as $category ): ?>
                                                <option><?php echo $category['Category']['CategoryName'];?></option>
                                                <?php endforeach; ?>	
                                                
                                            </select>
                                    </div>
                                    <div class="form-group">                                     
                                            <select class="form-control select">
                                                <option>Status</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Go</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table datatable_simple">
                                            <thead>
                                                <tr>
                                                    <th>Brand Id</th>
                                                    <th>Brand Name</th>
                                                    <th>Account Owner Name</th>
                                                    <th>Platforms</th>
                                                    <th>No of pages</th>
                                                    <th>No of Missions</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php foreach( $users as $user ): ?>
                                                <tr>
                                                    <td><?php echo $user['User']['id'];?></td>
                                                    <td><?php echo $user['Brand']['brand_name'];?></td>
                                                    <td><?php echo $user['User']['name'];?></td>
                                                    <td><?php echo $user['Brand']['platform_interested_in'];?></td>
                                                    <td>5</td>
                                                    <td>15</td>
                                                    <td><?php $status= $user['User']['status']; if($status==1){ echo 'Active'; }else {echo 'Inactive';} ?></td>
                                                    <td>
                                                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'),                                                                      array('action' => 'addbrand', $user['User']['id']),array('escape' => FALSE)); ?>
													
													 <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-remove"></span>'),                                                                      array('action' => 'delete', $user['User']['id']),array('escape' => FALSE)); ?>
													</td>
                                                </tr>
                                               <?php endforeach; ?>												
												
                                                
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
        <!-- END PAGE CONTAINER -->


