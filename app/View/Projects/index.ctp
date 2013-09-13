<div class="projects index">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vertical_id'); ?></th>
			<th><?php echo $this->Paginator->sort('projectstatus_id'); ?></th>
			<th><?php echo $this->Paginator->sort('runit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($projects as $project): ?>
	<tr>
		<td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['project_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['User']['id'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Vertical']['vertical_name'], array('controller' => 'verticals', 'action' => 'view', $project['Vertical']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Projectstatus']['status'], array('controller' => 'projectstatuses', 'action' => 'view', $project['Projectstatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Runit']['ru_name'], array('controller' => 'runits', 'action' => 'view', $project['Runit']['id'])); ?>
		</td>
		<td><?php echo h($project['Project']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['created']); ?>&nbsp;</td>
		<td><?php echo h($project['Project']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
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
