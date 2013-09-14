<div class="verticals form">
<div class="addNewLinkOnIndex">
	<?php 		
		echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vertical.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vertical.id')));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New Vertical'), array('action' => 'add'));
	?>
 </div>
<?php echo $this->Form->create('Vertical'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vertical'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vertical_name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Reporting Units'), array('controller' => 'runits', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li class="relatedAction"><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
