<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo (isset($title) && $title!='')? $title:'Socilio';?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('theme-default');

		echo $this->fetch('meta');
	?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal">
                <li class="xn-logo">
                    <a href="#">SOCILIO</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Dashboard</span></a>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-briefcase"></span> <span class="xn-text">Brands</span></a>
                    <ul class="animated zoomIn">
                        <li><a href="#"><span class="fa fa-thumb-tack"></span> Register BArand</a></li>
                    </ul>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                </li>
                <li class="xn-openable">
                    <a href="#"><span class="fa fa-gift"></span> <span class="xn-text">Rewards</span></a>
                </li>
                <!-- POWER OFF -->
                <li class="xn-icon-button pull-right last">
                    <a href="#"><span class="fa fa-power-off"></span></a>
                    <ul class="xn-drop-left animated zoomIn">
                        <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                        <li><a href="<?php  echo $this->Html->url(array("controller" => "users","action" => "logout"))?>" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                    </ul>
                </li>
                <!-- END POWER OFF -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->
            <!-- START BREADCRUMB -->
            <?php
                //$breadcrumb["Home"]=array("controller" => "home","action" => "index");
                //$breadcrumb["Layouts"]=array("controller" => "home","action" => "index");
                //$breadcrumb["Navigation Top"]=array("controller" => "home","action" => "index");
                if(isset($breadcrumb) && !empty($breadcrumb)){ $i=0;?>
                    <ul class="breadcrumb">
                        <?php foreach($breadcrumb as $key => $val){
                                if($i==count($breadcrumb)-1)
                                    echo '<li class="active">'.$key.'</li>';
                                else
                                    echo '<li><a href="' . $this->Html->url($val) . '">'.$key.'</a></li>';
                                $i++;
                        } ?>
                    </ul>
            <?php } ?>
            <!-- END BREADCRUMB -->
            <!-- PAGE CONTENT WRAPPER -->
            <?php /* view content start */ ?>
            <?php echo $this->fetch('content'); ?>
            <?php /* view content end */ ?>
            <!-- PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
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
                        <a href="<?php  echo $this->Html->url(array("controller" => "users","action" => "logout"))?>" class="btn btn-success btn-lg">Yes</a>
                        <button class="btn btn-default btn-lg mb-control-close">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->
    <!-- START PRELOADS -->
    <audio id="audio-alert" src="<?php  echo $this->Html->url('/', true) ?>audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="<?php  echo $this->Html->url('/', true) ?>audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->
    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <?php echo $this->Html->script('plugins/jquery/jquery.min.js'); ?>
    <?php echo $this->Html->script('plugins/jquery/jquery-ui.min.js'); ?>
    <?php echo $this->Html->script('plugins/bootstrap/bootstrap.min.js'); ?>
    <!-- END PLUGINS -->
    
    <!-- THIS PAGE PLUGINS -->
    <?php echo $this->Html->script('plugins/icheck/icheck.min.js'); ?>
    <?php echo $this->Html->script('plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>
    <?php echo $this->Html->script('plugins/bootstrap/bootstrap-select.js'); ?>
    <?php echo $this->Html->script('plugins/tagsinput/jquery.tagsinput.min.js'); ?>
    <!-- END PAGE PLUGINS -->
    <?php echo $this->Html->script('plugins/validationengine/languages/jquery.validationEngine-en.js'); ?>
    <?php echo $this->Html->script('plugins/validationengine/jquery.validationEngine.js'); ?>
    <?php echo $this->Html->script('plugins/jquery-validation/jquery.validate.js'); ?>
    <!-- START TEMPLATE -->
    <?php echo $this->Html->script('plugins.js'); ?>
    <?php echo $this->Html->script('actions.js'); ?>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <?php
        if(isset($jss))
        {
            foreach($jss as $js)
            {
                echo $this->Html->script($js);
            }
        } 
    ?>
</body>
</html>
