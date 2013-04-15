<div class="businesses form">
<?php 
echo $this->Form->create('Business'); 
?>
	<fieldset>
		<legend><?php echo __('Add Business'); ?></legend>
	<?php
		echo $this->Form->hidden('user_id', array('value' => $userId));
		echo $this->Form->input('name');
		echo $this->Form->input('business_category_id');
		echo $this->Form->input('description');
		echo $this->Form->input('website');
		//echo $this->Form->input('timezone');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('cell');
		echo $this->Form->input('fax');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Categories'), array('controller' => 'business_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		
	</ul>
</div>
