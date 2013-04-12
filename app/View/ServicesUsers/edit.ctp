<div class="servicesUsers form">
<?php echo $this->Form->create('ServicesUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Services User'); ?></legend>
	<?php
		echo $this->Form->input('service_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ServicesUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ServicesUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
