<div class="timeBreaks form">
<?php echo $this->Form->create('TimeBreak'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time Break'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TimeBreak.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TimeBreak.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Time Breaks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
