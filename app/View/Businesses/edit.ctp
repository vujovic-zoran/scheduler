<div class="businesses form">
<?php echo $this->Form->create('Business'); ?>
	<fieldset>
		<legend><?php echo __('Edit Business'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('business_category_id');
		echo $this->Form->input('description');
		echo $this->Form->input('website');
		echo $this->Form->input('timezone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Business.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Business.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Categories'), array('controller' => 'business_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Category'), array('controller' => 'business_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
