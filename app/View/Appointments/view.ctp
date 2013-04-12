<div class="appointments view">
<h2><?php  echo __('Appointment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $appointment['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['User']['id'], array('controller' => 'users', 'action' => 'view', $appointment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment'), array('action' => 'edit', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment'), array('action' => 'delete', $appointment['Appointment']['id']), null, __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('controller' => 'filled_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Filled Forms'); ?></h3>
	<?php if (!empty($appointment['FilledForm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Appointment Form Id'); ?></th>
		<th><?php echo __('Appointment Id'); ?></th>
		<th><?php echo __('Full Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Cell'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Col1'); ?></th>
		<th><?php echo __('Col2'); ?></th>
		<th><?php echo __('Col3'); ?></th>
		<th><?php echo __('Col4'); ?></th>
		<th><?php echo __('Col5'); ?></th>
		<th><?php echo __('Col6'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($appointment['FilledForm'] as $filledForm): ?>
		<tr>
			<td><?php echo $filledForm['id']; ?></td>
			<td><?php echo $filledForm['appointment_form_id']; ?></td>
			<td><?php echo $filledForm['appointment_id']; ?></td>
			<td><?php echo $filledForm['full_name']; ?></td>
			<td><?php echo $filledForm['address']; ?></td>
			<td><?php echo $filledForm['email']; ?></td>
			<td><?php echo $filledForm['phone']; ?></td>
			<td><?php echo $filledForm['fax']; ?></td>
			<td><?php echo $filledForm['cell']; ?></td>
			<td><?php echo $filledForm['comment']; ?></td>
			<td><?php echo $filledForm['col1']; ?></td>
			<td><?php echo $filledForm['col2']; ?></td>
			<td><?php echo $filledForm['col3']; ?></td>
			<td><?php echo $filledForm['col4']; ?></td>
			<td><?php echo $filledForm['col5']; ?></td>
			<td><?php echo $filledForm['col6']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'filled_forms', 'action' => 'view', $filledForm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'filled_forms', 'action' => 'edit', $filledForm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'filled_forms', 'action' => 'delete', $filledForm['id']), null, __('Are you sure you want to delete # %s?', $filledForm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
