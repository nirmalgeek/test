<div class="brands form">
<?php echo $this->Form->create('Brand'); ?>
	<fieldset>
		<legend><?php echo __('Add Brand'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('brand_name');
		echo $this->Form->input('website');
		echo $this->Form->input('phone');
		echo $this->Form->input('logo');
		echo $this->Form->input('bg_color');
		echo $this->Form->input('category_id');
		echo $this->Form->input('brand_url');
		echo $this->Form->input('social_page_link');
		echo $this->Form->input('status');
		echo $this->Form->input('created_date');
		echo $this->Form->input('modified_date');
		echo $this->Form->input('expiry_date');
		echo $this->Form->input('plan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
