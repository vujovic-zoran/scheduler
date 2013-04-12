<div class="services view">
<h2><?php  echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $service['Business']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($service['Service']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($service['Service']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($service['Service']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reminder Days Prior'); ?></dt>
		<dd>
			<?php echo h($service['Service']['reminder_days_prior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reminder Message'); ?></dt>
		<dd>
			<?php echo h($service['Service']['reminder_message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Days Before'); ?></dt>
		<dd>
			<?php echo h($service['Service']['min_days_before']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Days Before'); ?></dt>
		<dd>
			<?php echo h($service['Service']['max_days_before']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmation Message'); ?></dt>
		<dd>
			<?php echo h($service['Service']['confirmation_message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('controller' => 'appointment_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('controller' => 'appointment_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Appointment Forms'); ?></h3>
	<?php if (!empty($service['AppointmentForm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Full Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Cell'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Col1'); ?></th>
		<th><?php echo __('Col1 Type'); ?></th>
		<th><?php echo __('Col2'); ?></th>
		<th><?php echo __('Col2 Type'); ?></th>
		<th><?php echo __('Col3'); ?></th>
		<th><?php echo __('Col3 Type'); ?></th>
		<th><?php echo __('Col4'); ?></th>
		<th><?php echo __('Col4 Type'); ?></th>
		<th><?php echo __('Col5'); ?></th>
		<th><?php echo __('Col5 Type'); ?></th>
		<th><?php echo __('Col6'); ?></th>
		<th><?php echo __('Col6 Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($service['AppointmentForm'] as $appointmentForm): ?>
		<tr>
			<td><?php echo $appointmentForm['id']; ?></td>
			<td><?php echo $appointmentForm['service_id']; ?></td>
			<td><?php echo $appointmentForm['full_name']; ?></td>
			<td><?php echo $appointmentForm['address']; ?></td>
			<td><?php echo $appointmentForm['email']; ?></td>
			<td><?php echo $appointmentForm['phone']; ?></td>
			<td><?php echo $appointmentForm['cell']; ?></td>
			<td><?php echo $appointmentForm['fax']; ?></td>
			<td><?php echo $appointmentForm['comment']; ?></td>
			<td><?php echo $appointmentForm['col1']; ?></td>
			<td><?php echo $appointmentForm['col1_type']; ?></td>
			<td><?php echo $appointmentForm['col2']; ?></td>
			<td><?php echo $appointmentForm['col2_type']; ?></td>
			<td><?php echo $appointmentForm['col3']; ?></td>
			<td><?php echo $appointmentForm['col3_type']; ?></td>
			<td><?php echo $appointmentForm['col4']; ?></td>
			<td><?php echo $appointmentForm['col4_type']; ?></td>
			<td><?php echo $appointmentForm['col5']; ?></td>
			<td><?php echo $appointmentForm['col5_type']; ?></td>
			<td><?php echo $appointmentForm['col6']; ?></td>
			<td><?php echo $appointmentForm['col6_type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'appointment_forms', 'action' => 'view', $appointmentForm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'appointment_forms', 'action' => 'edit', $appointmentForm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'appointment_forms', 'action' => 'delete', $appointmentForm['id']), null, __('Are you sure you want to delete # %s?', $appointmentForm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Appointment Form'), array('controller' => 'appointment_forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Schedules'); ?></h3>
	<?php if (!empty($service['Schedule'])): ?>
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
		foreach ($service['Schedule'] as $schedule): ?>
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
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($service['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Full Name'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Cell'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($service['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['full_name']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['cell']; ?></td>
			<td><?php echo $user['fax']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['city']; ?></td>
			<td><?php echo $user['state']; ?></td>
			<td><?php echo $user['zip']; ?></td>
			<td><?php echo $user['country_id']; ?></td>
			<td><?php echo $user['note']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
