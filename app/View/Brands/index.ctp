<div class="brands index">
	<h2><?php echo __('Brands'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_name'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('logo'); ?></th>
			<th><?php echo $this->Paginator->sort('bg_color'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('brand_url'); ?></th>
			<th><?php echo $this->Paginator->sort('social_page_link'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_date'); ?></th>
			<th><?php echo $this->Paginator->sort('expiry_date'); ?></th>
			<th><?php echo $this->Paginator->sort('plan'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($brands as $brand): ?>
	<tr>
		<td><?php echo h($brand['Brand']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($brand['User']['name'], array('controller' => 'users', 'action' => 'view', $brand['User']['id'])); ?>
		</td>
		<td><?php echo h($brand['Brand']['brand_name']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['website']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['phone']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['logo']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['bg_color']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['category_id']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['brand_url']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['social_page_link']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['status']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['modified_date']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['expiry_date']); ?>&nbsp;</td>
		<td><?php echo h($brand['Brand']['plan']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $brand['Brand']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $brand['Brand']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $brand['Brand']['id']), array(), __('Are you sure you want to delete # %s?', $brand['Brand']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Brand'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
