<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> Register as Partner</h2>
</div>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Register as Partner</h3>
                                </div>
                                <div class="panel-body">
                                    <?php echo $this->Session->flash(); ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php echo $this->Form->create("User", array(
                                                    "url" => array("controller" => "users", "action" => "add"),
                                                    "id" => "jvalidate",
                                                    "role" => "form",
                                                    "class" => "form-horizontal",
                                                    "novalidate" => "novalidate"
                                        )); ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Name</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    </div>
												</div>
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Brand/Agency</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <input type="text" class="form-control" placeholder="Brand/Agency" name="brand">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Website</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <input type="text" value="" class="form-control" placeholder="Website" name="website">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Phone</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <input type="text" value="" class="form-control" placeholder="Phone" name="phoneno">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 col-xs-12 control-label">Email</label>
                                                    <div class="col-md-6 col-xs-12">
                                                        <input type="text" value="" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="block">
                                                    <h4>Platform Interested in</h4>
                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="check">
                                                                <div class="icheckbox_minimal-grey" style="position: relative;">
                                                                    <input type="checkbox" class="icheckbox" name="topic[]" style="position: absolute; opacity: 0;" value="Facebook">
                                                                </div>
                                                                Facebook
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check">
                                                                <div class="icheckbox_minimal-grey" style="position: relative;">
                                                                    <input type="checkbox" class="icheckbox" name="topic[]" style="position: absolute; opacity: 0;" value="Twitter">
                                                                </div>
                                                                Twitter
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check">
                                                                <div class="icheckbox_minimal-grey" style="position: relative;">
                                                                    <input type="checkbox" class="icheckbox" name="topic[]" style="position: absolute; opacity: 0;" value="Instagram">
                                                                </div>
                                                                Instagram
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check">
                                                                <div class="icheckbox_minimal-grey" style="position: relative;">
                                                                    <input type="checkbox" class="icheckbox" name="topic[]" style="position: absolute; opacity: 0;" value="Linkden">
                                                                </div>
                                                                Linkden
                                                            </label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="check">
                                                                <div class="icheckbox_minimal-grey" style="position: relative;">
                                                                    <input type="checkbox" class="icheckbox" name="topics[]" style="position: absolute; opacity: 0;" value="Linkden">
                                                                </div>
                                                                Linkden
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <input type="reset" class="btn btn-default" value="Clear Form">                                   
                                    <button class="btn btn-primary pull-right" onclick="$('#jvalidate').submit()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>