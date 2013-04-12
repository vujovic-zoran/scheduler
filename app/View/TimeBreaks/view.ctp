<div class="timeBreaks view">
<h2><?php  echo __('Time Break'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timeBreak['TimeBreak']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timeBreak['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $timeBreak['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From'); ?></dt>
		<dd>
			<?php echo h($timeBreak['TimeBreak']['from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To'); ?></dt>
		<dd>
			<?php echo h($timeBreak['TimeBreak']['to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($timeBreak['TimeBreak']['note']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Break'), array('action' => 'edit', $timeBreak['TimeBreak']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time Break'), array('action' => 'delete', $timeBreak['TimeBreak']['id']), null, __('Are you sure you want to delete # %s?', $timeBreak['TimeBreak']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Breaks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Break'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
