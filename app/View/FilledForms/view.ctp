<div class="filledForms view">
<h2><?php  echo __('Filled Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filledForm['AppointmentForm']['id'], array('controller' => 'appointment_forms', 'action' => 'view', $filledForm['AppointmentForm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($filledForm['Appointment']['name'], array('controller' => 'appointments', 'action' => 'view', $filledForm['Appointment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Full Name'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col1'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col2'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col3'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col4'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col5'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Col6'); ?></dt>
		<dd>
			<?php echo h($filledForm['FilledForm']['col6']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Filled Form'), array('action' => 'edit', $filledForm['FilledForm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Filled Form'), array('action' => 'delete', $filledForm['FilledForm']['id']), null, __('Are you sure you want to delete # %s?', $filledForm['FilledForm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Filled Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Filled Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointment Forms'), array('controller' => 'appointment_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Form'), array('controller' => 'appointment_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
