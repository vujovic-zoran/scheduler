<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Create Free Account'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->hidden('group_id', array("value" => 10));
		echo $this->Form->input('email');
		echo $this->Form->input('full_name');
		echo $this->Form->input('password');
		echo $this->Form->input('phone');
		echo $this->Form->input('cell');
		echo $this->Form->input('fax');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		//echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('location_id');
		echo $this->Form->hidden('country_id', array("value" => 1));
		//echo $this->Form->input('note');
		//echo $this->Form->input('Service');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
	</ul>
</div>
