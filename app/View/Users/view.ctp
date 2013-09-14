<div class="users view">
<h2><?php echo __('User'); ?></h2>
<div class="addNewLinkOnIndex">
	<?php 
		echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); 
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id']));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New User'), array('action' => 'add'));
	?>
 </div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['role_name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Project']['project_name'], array('controller' => 'projects', 'action' => 'view', $user['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manager Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['manager_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li class="relatedAction"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Reporting Units'), array('controller' => 'runits', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
	<!-- <div class="related">
		<h3><?php //echo __('Related Runits'); ?></h3>
	<?php //if (!empty($user['Runit'])): ?>
		<dl>
			<dt><?php //echo __('Id'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['id']; ?>
&nbsp;</dd>
		<dt><?php //echo __('Ru Name'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['ru_name']; ?>
&nbsp;</dd>
		<dt><?php //echo __('User Id'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['user_id']; ?>
&nbsp;</dd>
		<dt><?php //echo __('Is Active'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['is_active']; ?>
&nbsp;</dd>
		<dt><?php //echo __('Created'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['created']; ?>
&nbsp;</dd>
		<dt><?php //echo __('Modified'); ?></dt>
		<dd>
	<?php //echo $user['Runit'][0]['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php //endif; ?>
		<div class="actions">
			<ul>
				<li><?php //echo $this->Html->link(__('Edit Runit'), array('controller' => 'runits', 'action' => 'edit', $user['Runit'][0]['id'])); ?></li>
			</ul>
		</div>
	</div> -->
		<div class="related rightContent">
		<h3><?php echo __('Related User Info'); ?></h3>
	<?php if (!empty($user['Userinfo'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['username']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['photo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['contact_number']; ?>
&nbsp;</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['address']; ?>
&nbsp;</dd>
		<dt><?php echo __('Extra Comments'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['extra_comments']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $user['Userinfo']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit User Info'), array('controller' => 'userinfos', 'action' => 'edit', $user['Userinfo']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Vertical Id'); ?></th>
		<th><?php echo __('Projectstatus Id'); ?></th>
		<th><?php echo __('Runit Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Project'] as $project): if(is_array($project)):?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td><?php echo $project['vertical_id']; ?></td>
			<td><?php echo $project['projectstatus_id']; ?></td>
			<td><?php echo $project['runit_id']; ?></td>
			<td><?php echo $project['is_active']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endif; endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ratings'); ?></h3>
	<?php if (!empty($user['Rating'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Rating Cycle'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Rating'] as $rating): ?>
		<tr>
			<td><?php echo $rating['id']; ?></td>
			<td><?php echo $rating['rating']; ?></td>
			<td><?php echo $rating['rating_cycle']; ?></td>
			<td><?php echo $rating['created']; ?></td>
			<td><?php echo $rating['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ratings', 'action' => 'view', $rating['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ratings', 'action' => 'edit', $rating['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ratings', 'action' => 'delete', $rating['id']), null, __('Are you sure you want to delete # %s?', $rating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Verticals'); ?></h3>
	<?php if (!empty($user['Vertical'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vertical Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Vertical'] as $vertical): ?>
		<tr>
			<td><?php echo $vertical['id']; ?></td>
			<td><?php echo $vertical['vertical_name']; ?></td>
			<td><?php echo $vertical['user_id']; ?></td>
			<td><?php echo $vertical['is_active']; ?></td>
			<td><?php echo $vertical['created']; ?></td>
			<td><?php echo $vertical['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'verticals', 'action' => 'view', $vertical['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'verticals', 'action' => 'edit', $vertical['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'verticals', 'action' => 'delete', $vertical['id']), null, __('Are you sure you want to delete # %s?', $vertical['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vertical'), array('controller' => 'verticals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($user['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Skill Name'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['id']; ?></td>
			<td><?php echo $skill['skill_name']; ?></td>
			<td><?php echo $skill['is_active']; ?></td>
			<td><?php echo $skill['created']; ?></td>
			<td><?php echo $skill['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
