<div class="timeBreaks index">
	<h2><?php echo __('Time Breaks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('from'); ?></th>
			<th><?php echo $this->Paginator->sort('to'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($timeBreaks as $timeBreak): ?>
	<tr>
		<td><?php echo h($timeBreak['TimeBreak']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timeBreak['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $timeBreak['Schedule']['id'])); ?>
		</td>
		<td><?php echo h($timeBreak['TimeBreak']['from']); ?>&nbsp;</td>
		<td><?php echo h($timeBreak['TimeBreak']['to']); ?>&nbsp;</td>
		<td><?php echo h($timeBreak['TimeBreak']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timeBreak['TimeBreak']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timeBreak['TimeBreak']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timeBreak['TimeBreak']['id']), null, __('Are you sure you want to delete # %s?', $timeBreak['TimeBreak']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Time Break'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
