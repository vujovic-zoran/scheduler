<div class="appointmentForms index">
	<h2><?php echo __('Appointment Forms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('service_id'); ?></th>
			<th><?php echo $this->Paginator->sort('full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cell'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('col1'); ?></th>
			<th><?php echo $this->Paginator->sort('col1_type'); ?></th>
			<th><?php echo $this->Paginator->sort('col2'); ?></th>
			<th><?php echo $this->Paginator->sort('col2_type'); ?></th>
			<th><?php echo $this->Paginator->sort('col3'); ?></th>
			<th><?php echo $this->Paginator->sort('col3_type'); ?></th>
			<th><?php echo $this->Paginator->sort('col4'); ?></th>
			<th><?php echo $this->Paginator->sort('col4_type'); ?></th>
			<th><?php echo $this->Paginator->sort('col5'); ?></th>
			<th><?php echo $this->Paginator->sort('col5_type'); ?></th>
			<th><?php echo $this->Paginator->sort('col6'); ?></th>
			<th><?php echo $this->Paginator->sort('col6_type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($appointmentForms as $appointmentForm): ?>
	<tr>
		<td><?php echo h($appointmentForm['AppointmentForm']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointmentForm['Service']['name'], array('controller' => 'services', 'action' => 'view', $appointmentForm['Service']['id'])); ?>
		</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['full_name']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['address']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['email']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['phone']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['cell']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['fax']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['comment']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col1']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col1_type']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col2']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col2_type']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col3']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col3_type']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col4']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col4_type']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col5']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col5_type']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col6']); ?>&nbsp;</td>
		<td><?php echo h($appointmentForm['AppointmentForm']['col6_type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointmentForm['AppointmentForm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointmentForm['AppointmentForm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointmentForm['AppointmentForm']['id']), null, __('Are you sure you want to delete # %s?', $appointmentForm['AppointmentForm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('controller' => 'filled_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
