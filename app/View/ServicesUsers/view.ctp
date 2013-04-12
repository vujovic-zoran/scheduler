<div class="servicesUsers view">
<h2><?php  echo __('Services User'); ?></h2>
	<dl>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servicesUser['Service']['name'], array('controller' => 'services', 'action' => 'view', $servicesUser['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servicesUser['User']['id'], array('controller' => 'users', 'action' => 'view', $servicesUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Services User'), array('action' => 'edit', $servicesUser['ServicesUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Services User'), array('action' => 'delete', $servicesUser['ServicesUser']['id']), null, __('Are you sure you want to delete # %s?', $servicesUser['ServicesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Services User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
