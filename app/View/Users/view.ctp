<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['id'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($user['User']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($user['User']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($user['User']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($user['User']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Country']['name'], array('controller' => 'countries', 'action' => 'view', $user['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($user['User']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($user['Appointment'])): ?>
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
		foreach ($user['Appointment'] as $appointment): ?>
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
	<h3><?php echo __('Related Schedules'); ?></h3>
	<?php if (!empty($user['Schedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Mon'); ?></th>
		<th><?php echo __('Tue'); ?></th>
		<th><?php echo __('Wed'); ?></th>
		<th><?php echo __('Thu'); ?></th>
		<th><?php echo __('Fri'); ?></th>
		<th><?php echo __('Sat'); ?></th>
		<th><?php echo __('Sun'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Schedule'] as $schedule): ?>
		<tr>
			<td><?php echo $schedule['id']; ?></td>
			<td><?php echo $schedule['business_id']; ?></td>
			<td><?php echo $schedule['user_id']; ?></td>
			<td><?php echo $schedule['service_id']; ?></td>
			<td><?php echo $schedule['name']; ?></td>
			<td><?php echo $schedule['mon']; ?></td>
			<td><?php echo $schedule['tue']; ?></td>
			<td><?php echo $schedule['wed']; ?></td>
			<td><?php echo $schedule['thu']; ?></td>
			<td><?php echo $schedule['fri']; ?></td>
			<td><?php echo $schedule['sat']; ?></td>
			<td><?php echo $schedule['sun']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schedules', 'action' => 'view', $schedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schedules', 'action' => 'edit', $schedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schedules', 'action' => 'delete', $schedule['id']), null, __('Are you sure you want to delete # %s?', $schedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($user['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Reminder Days Prior'); ?></th>
		<th><?php echo __('Reminder Message'); ?></th>
		<th><?php echo __('Min Days Before'); ?></th>
		<th><?php echo __('Max Days Before'); ?></th>
		<th><?php echo __('Confirmation Message'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['business_id']; ?></td>
			<td><?php echo $service['name']; ?></td>
			<td><?php echo $service['description']; ?></td>
			<td><?php echo $service['length']; ?></td>
			<td><?php echo $service['reminder_days_prior']; ?></td>
			<td><?php echo $service['reminder_message']; ?></td>
			<td><?php echo $service['min_days_before']; ?></td>
			<td><?php echo $service['max_days_before']; ?></td>
			<td><?php echo $service['confirmation_message']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), null, __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
