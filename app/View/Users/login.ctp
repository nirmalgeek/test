<div class="login-title"><strong>Log In</strong> to your account</div>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create("User", array(
            "url" => array("controller" => "users", "action" => "login"),
            "class" => "form-horizontal",
)); ?>
    <div class="form-group">
        <div class="col-md-12">
            <?php echo $this->Form->input('username', array(
                            "div"=>false,
                            "label"=>false,
                            "type"=>"email",
                            "class"=>"form-control",
                            "placeholder" => "Username",
                            "id"=>"txt_username"
            )); ?>
        </div>
    </div>
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
        <div class="col-md-6">
            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
        </div>
        <div class="col-md-6">
            <button class="btn btn-info btn-block">Log In</button>
        </div>
    </div>
    <div class="login-or">OR</div>
    <div class="form-group">
        <div class="col-md-4">
            <a class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</a>
        </div>
    </div>
    <div class="login-subtitle">
        Don't have an account yet? <a href="<?php  echo $this->Html->url(array("controller" => "users","action" => "add"))?>">Create an account</a>
    </div>
</form>