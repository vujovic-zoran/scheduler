<div class="filledForms form">
<?php echo $this->Form->create('FilledForm'); ?>
	<fieldset>
		<legend><?php echo __('Add Filled Form'); ?></legend>
	<?php
		echo $this->Form->input('appointment_form_id');
		echo $this->Form->input('appointment_id');
		echo $this->Form->input('full_name');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('cell');
		echo $this->Form->input('comment');
		echo $this->Form->input('col1');
		echo $this->Form->input('col2');
		echo $this->Form->input('col3');
		echo $this->Form->input('col4');
		echo $this->Form->input('col5');
		echo $this->Form->input('col6');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Filled Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('controller' => 'appointment_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('controller' => 'appointment_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
