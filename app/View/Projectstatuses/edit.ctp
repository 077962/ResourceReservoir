<div class="projectstatuses form">
<?php echo $this->Form->create('Projectstatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projectstatus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Projectstatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Projectstatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projectstatuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
