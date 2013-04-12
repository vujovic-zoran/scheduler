<div class="businesses index">
	<h2><?php echo __('Businesses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('business_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('timezone'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($businesses as $business): ?>
	<tr>
		<td><?php echo h($business['Business']['id']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($business['BusinessCategory']['name'], array('controller' => 'business_categories', 'action' => 'view', $business['BusinessCategory']['id'])); ?>
		</td>
		<td><?php echo h($business['Business']['description']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['website']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['timezone']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $business['Business']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $business['Business']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $business['Business']['id']), null, __('Are you sure you want to delete # %s?', $business['Business']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Business'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Categories'), array('controller' => 'business_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Category'), array('controller' => 'business_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
