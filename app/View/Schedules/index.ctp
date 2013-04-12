<div class="schedules index">
	<h2><?php echo __('Schedules'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('business_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('mon'); ?></th>
			<th><?php echo $this->Paginator->sort('tue'); ?></th>
			<th><?php echo $this->Paginator->sort('wed'); ?></th>
			<th><?php echo $this->Paginator->sort('thu'); ?></th>
			<th><?php echo $this->Paginator->sort('fri'); ?></th>
			<th><?php echo $this->Paginator->sort('sat'); ?></th>
			<th><?php echo $this->Paginator->sort('sun'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedules as $schedule): ?>
	<tr>
		<td><?php echo h($schedule['Schedule']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($schedule['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $schedule['Business']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($schedule['User']['id'], array('controller' => 'users', 'action' => 'view', $schedule['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($schedule['Service']['name'], array('controller' => 'services', 'action' => 'view', $schedule['Service']['id'])); ?>
		</td>
		<td><?php echo h($schedule['Schedule']['name']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['mon']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['tue']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['wed']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['thu']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['fri']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['sat']); ?>&nbsp;</td>
		<td><?php echo h($schedule['Schedule']['sun']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $schedule['Schedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $schedule['Schedule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $schedule['Schedule']['id']), null, __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Breaks'), array('controller' => 'time_breaks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Break'), array('controller' => 'time_breaks', 'action' => 'add')); ?> </li>
	</ul>
</div>
