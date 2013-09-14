<div class="userinfos view">
<h2><?php echo __('Userinfo'); ?></h2>
<div class="addNewLinkOnIndex">
	<?php 
		echo $this->Html->link(__('Edit User Info'), array('action' => 'edit', $userinfo['Userinfo']['id'])); 
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Form->postLink(__('Delete User Info'), array('action' => 'delete', $userinfo['Userinfo']['id']), null, __('Are you sure you want to delete # %s?', $userinfo['Userinfo']['id']));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New User Info'), array('action' => 'add'));
	?>
 </div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userinfo['User']['id'], array('controller' => 'users', 'action' => 'view', $userinfo['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra Comments'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['extra_comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userinfo['Userinfo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
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
