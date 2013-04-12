<div class="schedules view">
<h2><?php  echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $schedule['Business']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['User']['id'], array('controller' => 'users', 'action' => 'view', $schedule['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['Service']['name'], array('controller' => 'services', 'action' => 'view', $schedule['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mon'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['mon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tue'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['tue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wed'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['wed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thu'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['thu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fri'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['fri']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sat'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['sat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sun'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['sun']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), null, __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($schedule['Appointment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($schedule['Appointment'] as $appointment): ?>
		<tr>
			<td><?php echo $appointment['id']; ?></td>
			<td><?php echo $appointment['schedule_id']; ?></td>
			<td><?php echo $appointment['user_id']; ?></td>
			<td><?php echo $appointment['time']; ?></td>
			<td><?php echo $appointment['name']; ?></td>
			<td><?php echo $appointment['email']; ?></td>
			<td><?php echo $appointment['message']; ?></td>
			<td><?php echo $appointment['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'appointments', 'action' => 'view', $appointment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointments', 'action' => 'edit', $appointment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointments', 'action' => 'delete', $appointment['id']), null, __('Are you sure you want to delete # %s?', $appointment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Time Breaks'); ?></h3>
	<?php if (!empty($schedule['TimeBreak'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($schedule['TimeBreak'] as $timeBreak): ?>
		<tr>
			<td><?php echo $timeBreak['id']; ?></td>
			<td><?php echo $timeBreak['schedule_id']; ?></td>
			<td><?php echo $timeBreak['from']; ?></td>
			<td><?php echo $timeBreak['to']; ?></td>
			<td><?php echo $timeBreak['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'time_breaks', 'action' => 'view', $timeBreak['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'time_breaks', 'action' => 'edit', $timeBreak['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'time_breaks', 'action' => 'delete', $timeBreak['id']), null, __('Are you sure you want to delete # %s?', $timeBreak['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Break'), array('controller' => 'time_breaks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
