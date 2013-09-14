<div class="projects view">
<div class="addNewLinkOnIndex">
	<?php 
		echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id']));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id']));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New Project'), array('action' => 'add'));
	?>
 </div>
<h2><?php echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vertical'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Vertical']['vertical_name'], array('controller' => 'verticals', 'action' => 'view', $project['Vertical']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projectstatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Projectstatus']['status'], array('controller' => 'projectstatuses', 'action' => 'view', $project['Projectstatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Runit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Runit']['ru_name'], array('controller' => 'runits', 'action' => 'view', $project['Runit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($project['Project']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>		
		<li class="relatedAction"><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Reporting Units'), array('controller' => 'runits', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($project['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Manager Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php $i = 0; foreach ($project['User'] as $user): if(is_array($user)):?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['project_id']; ?></td>
			<td><?php echo $user['manager_id']; ?></td>
			<td><?php echo $user['is_active']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endif;endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
