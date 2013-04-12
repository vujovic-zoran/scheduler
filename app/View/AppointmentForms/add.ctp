<div class="appointmentForms form">
<?php echo $this->Form->create('AppointmentForm'); ?>
	<fieldset>
		<legend><?php echo __('Add Appointment Form'); ?></legend>
	<?php
		echo $this->Form->input('service_id');
		echo $this->Form->input('full_name');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('cell');
		echo $this->Form->input('fax');
		echo $this->Form->input('comment');
		echo $this->Form->input('col1');
		echo $this->Form->input('col1_type');
		echo $this->Form->input('col2');
		echo $this->Form->input('col2_type');
		echo $this->Form->input('col3');
		echo $this->Form->input('col3_type');
		echo $this->Form->input('col4');
		echo $this->Form->input('col4_type');
		echo $this->Form->input('col5');
		echo $this->Form->input('col5_type');
		echo $this->Form->input('col6');
		echo $this->Form->input('col6_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('controller' => 'filled_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
