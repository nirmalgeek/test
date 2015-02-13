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
	?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        html, body{
            height:100%;
        }
    </style>
    </head>
    <body style="height:100%;">
        <div class="login-container">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <?php echo $this->fetch('content'); ?>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 Geek
                    </div>
                    <!--<div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>-->
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <?php echo $this->Html->script('jquery.validate.js'); ?>
     <script type="text/javascript">
     $(function(){
       $("#txt_username").validate({
       expression: "if (VAL) return true; else return false;",
       message: " "
       });
       $("#txt_password").validate({
       expression: "if (VAL) return true; else return false;",
       message: " "
       });
        $("#txt_cpassword").validate({
       expression: "if (VAL) return true; else return false;",
       message: " "
       });
   });
   </script>
</body>

<!-- Mirrored from aqvatarius.com/themes/atlant_v1_3/html/pages-login-website.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Nov 2014 05:19:57 GMT -->
</html>