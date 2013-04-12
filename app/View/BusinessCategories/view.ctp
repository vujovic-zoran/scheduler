<div class="businessCategories view">
<h2><?php  echo __('Business Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessCategory['BusinessCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($businessCategory['BusinessCategory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Category'), array('action' => 'edit', $businessCategory['BusinessCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Category'), array('action' => 'delete', $businessCategory['BusinessCategory']['id']), null, __('Are you sure you want to delete # %s?', $businessCategory['BusinessCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Businesses'); ?></h3>
	<?php if (!empty($businessCategory['Business'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Business Category Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Timezone'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($businessCategory['Business'] as $business): ?>
		<tr>
			<td><?php echo $business['id']; ?></td>
			<td><?php echo $business['name']; ?></td>
			<td><?php echo $business['business_category_id']; ?></td>
			<td><?php echo $business['description']; ?></td>
			<td><?php echo $business['website']; ?></td>
			<td><?php echo $business['timezone']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'businesses', 'action' => 'view', $business['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'businesses', 'action' => 'edit', $business['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'businesses', 'action' => 'delete', $business['id']), null, __('Are you sure you want to delete # %s?', $business['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
