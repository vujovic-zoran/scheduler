<div class="timeBreaks form">
<?php echo $this->Form->create('TimeBreak'); ?>
	<fieldset>
		<legend><?php echo __('Add Time Break'); ?></legend>
	<?php
		echo $this->Form->input('schedule_id');
		echo $this->Form->input('from');
		echo $this->Form->input('to');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Time Breaks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
