<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('vertical_id');
		echo $this->Form->input('projectstatus_id');
		echo $this->Form->input('runit_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vertical'), array('controller' => 'verticals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projectstatuses'), array('controller' => 'projectstatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projectstatus'), array('controller' => 'projectstatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Runits'), array('controller' => 'runits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Runit'), array('controller' => 'runits', 'action' => 'add')); ?> </li>
	</ul>
</div>
