<div class="runits view">
<h2><?php echo __('Runit'); ?></h2>
<div class="addNewLinkOnIndex">
	<?php 
		echo $this->Html->link(__('Edit Runit'), array('action' => 'edit', $runit['Runit']['id'])); 
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Form->postLink(__('Delete Runit'), array('action' => 'delete', $runit['Runit']['id']), null, __('Are you sure you want to delete # %s?', $runit['Runit']['id']));
		echo '&nbsp; &nbsp; &nbsp;';
		echo $this->Html->link(__('New RU'), array('action' => 'add'));
	?>
 </div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($runit['Runit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ru Name'); ?></dt>
		<dd>
			<?php echo h($runit['Runit']['ru_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($runit['User']['id'], array('controller' => 'users', 'action' => 'view', $runit['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($runit['Runit']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($runit['Runit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($runit['Runit']['modified']); ?>
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
		<li class="relatedAction"><?php echo $this->Html->link(__('List Reporting Units'), array('controller' => 'runits', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($runit['Project'])): ?>
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
	<?php foreach ($runit['Project'] as $project): ?>
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
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
