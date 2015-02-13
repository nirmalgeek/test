<div class="login-title">Update your password</div>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create("User", array(
            "url" => array("controller" => "users", "action" => "setPassword",$key),
            "class" => "form-horizontal",
)); ?>
    <div class="form-group">
        <div class="col-md-12">
            <?php echo $this->Form->input('password', array(
                            "div"=>false,
                            "label"=>false,
                            "class"=>"form-control",
                            "placeholder" => "Password",
                            "id"=>"txt_password"
            )); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <?php echo $this->Form->input('cpassword', array(
                            "div"=>false,
                            "label"=>false,
                            "type"=>"password",
                            "class"=>"form-control",
                            "placeholder" => "Password",
                            "id"=>"txt_cpassword"
            )); ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            <button class="btn btn-info btn-block">Set password</button>
        </div>
    </div>
</form>