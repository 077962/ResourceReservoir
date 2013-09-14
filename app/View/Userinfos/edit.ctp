<div class="userinfos form">
<div class="addNewLinkOnIndex">
	<?php 		
		echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Userinfo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Userinfo.id')));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New User Info'), array('action' => 'add'));
	?>
 </div>
<?php echo $this->Form->create('Userinfo', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Userinfo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');		
		echo $this->Form->input('email');
		echo $this->Form->input('photo', array('type' => 'file'));
		echo '<div class="input"><lable>Current Photo: </lable></div> &nbsp;&nbsp;'.$this->Html->image('NTTAMSTitleLogo.png', array('border' => '0', 'height' => '100'));
		echo $this->Form->input('contact_number');
		echo $this->Form->input('address');
		echo $this->Form->input('extra_comments');
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
		<li class="relatedAction"><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
