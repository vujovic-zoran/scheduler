<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('schedule_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('time');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('controller' => 'filled_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('controller' => 'filled_forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
