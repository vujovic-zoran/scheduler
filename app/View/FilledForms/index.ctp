<div class="filledForms index">
	<h2><?php echo __('Filled Forms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('appointment_form_id'); ?></th>
			<th><?php echo $this->Paginator->sort('appointment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('cell'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('col1'); ?></th>
			<th><?php echo $this->Paginator->sort('col2'); ?></th>
			<th><?php echo $this->Paginator->sort('col3'); ?></th>
			<th><?php echo $this->Paginator->sort('col4'); ?></th>
			<th><?php echo $this->Paginator->sort('col5'); ?></th>
			<th><?php echo $this->Paginator->sort('col6'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($filledForms as $filledForm): ?>
	<tr>
		<td><?php echo h($filledForm['FilledForm']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($filledForm['AppointmentForm']['id'], array('controller' => 'appointment_forms', 'action' => 'view', $filledForm['AppointmentForm']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($filledForm['Appointment']['name'], array('controller' => 'appointments', 'action' => 'view', $filledForm['Appointment']['id'])); ?>
		</td>
		<td><?php echo h($filledForm['FilledForm']['full_name']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['address']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['email']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['phone']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['fax']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['cell']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['comment']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col1']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col2']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col3']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col4']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col5']); ?>&nbsp;</td>
		<td><?php echo h($filledForm['FilledForm']['col6']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $filledForm['FilledForm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $filledForm['FilledForm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $filledForm['FilledForm']['id']), null, __('Are you sure you want to delete # %s?', $filledForm['FilledForm']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Filled Form'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('controller' => 'appointment_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('controller' => 'appointment_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
