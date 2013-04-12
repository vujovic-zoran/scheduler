<div class="businesses view">
<h2><?php  echo __('Business'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($business['Business']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($business['Business']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($business['Business']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($business['BusinessCategory']['name'], array('controller' => 'business_categories', 'action' => 'view', $business['BusinessCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($business['Business']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($business['Business']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timezone'); ?></dt>
		<dd>
			<?php echo h($business['Business']['timezone']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business'), array('action' => 'edit', $business['Business']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business'), array('action' => 'delete', $business['Business']['id']), null, __('Are you sure you want to delete # %s?', $business['Business']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Categories'), array('controller' => 'business_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Category'), array('controller' => 'business_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Schedules'); ?></h3>
	<?php if (!empty($business['Schedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Service Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Mon'); ?></th>
		<th><?php echo __('Tue'); ?></th>
		<th><?php echo __('Wed'); ?></th>
		<th><?php echo __('Thu'); ?></th>
		<th><?php echo __('Fri'); ?></th>
		<th><?php echo __('Sat'); ?></th>
		<th><?php echo __('Sun'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($business['Schedule'] as $schedule): ?>
		<tr>
			<td><?php echo $schedule['id']; ?></td>
			<td><?php echo $schedule['business_id']; ?></td>
			<td><?php echo $schedule['user_id']; ?></td>
			<td><?php echo $schedule['service_id']; ?></td>
			<td><?php echo $schedule['name']; ?></td>
			<td><?php echo $schedule['mon']; ?></td>
			<td><?php echo $schedule['tue']; ?></td>
			<td><?php echo $schedule['wed']; ?></td>
			<td><?php echo $schedule['thu']; ?></td>
			<td><?php echo $schedule['fri']; ?></td>
			<td><?php echo $schedule['sat']; ?></td>
			<td><?php echo $schedule['sun']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schedules', 'action' => 'view', $schedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schedules', 'action' => 'edit', $schedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schedules', 'action' => 'delete', $schedule['id']), null, __('Are you sure you want to delete # %s?', $schedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($business['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Reminder Days Prior'); ?></th>
		<th><?php echo __('Reminder Message'); ?></th>
		<th><?php echo __('Min Days Before'); ?></th>
		<th><?php echo __('Max Days Before'); ?></th>
		<th><?php echo __('Confirmation Message'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($business['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['business_id']; ?></td>
			<td><?php echo $service['name']; ?></td>
			<td><?php echo $service['description']; ?></td>
			<td><?php echo $service['length']; ?></td>
			<td><?php echo $service['reminder_days_prior']; ?></td>
			<td><?php echo $service['reminder_message']; ?></td>
			<td><?php echo $service['min_days_before']; ?></td>
			<td><?php echo $service['max_days_before']; ?></td>
			<td><?php echo $service['confirmation_message']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), null, __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
