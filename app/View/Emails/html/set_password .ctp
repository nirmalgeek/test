Dear <?php echo $name; ?>,
<p>To set your password, click on the link below (or copy and paste the URL into your browser).</p>
<p>
    <a target="_blank" href="<?php echo $this->Html->url('/', true).'users/setPassword/'.$link ?>"><?php echo $this->Html->url('/', true).'users/setPassword/'.$link ?></a>
</p>
<p>For any further queries or help please write to us at helpdesk@socilio.com</p>
