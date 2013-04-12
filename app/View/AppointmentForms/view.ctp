<div class="appointmentForms view">
<h2><?php  echo __('Appointment Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointmentForm['Service']['name'], array('controller' => 'services', 'action' => 'view', $appointmentForm['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col1'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col1 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col1_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col2'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col2 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col2_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col3'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col3 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col3_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col4'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col4 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col4_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col5'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col5 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col5_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col6'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col6 Type'); ?></dt>
		<dd>
			<?php echo h($appointmentForm['AppointmentForm']['col6_type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment Form'), array('action' => 'edit', $appointmentForm['AppointmentForm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment Form'), array('action' => 'delete', $appointmentForm['AppointmentForm']['id']), null, __('Are you sure you want to delete # %s?', $appointmentForm['AppointmentForm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('controller' => 'filled_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Filled Forms'); ?></h3>
	<?php if (!empty($appointmentForm['FilledForm'])): ?>
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
		foreach ($appointmentForm['FilledForm'] as $filledForm): ?>
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
