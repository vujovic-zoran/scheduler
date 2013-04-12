<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Add Service'); ?></legend>
	<?php
		echo $this->Form->input('business_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('length');
		echo $this->Form->input('reminder_days_prior');
		echo $this->Form->input('reminder_message');
		echo $this->Form->input('min_days_before');
		echo $this->Form->input('max_days_before');
		echo $this->Form->input('confirmation_message');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
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
