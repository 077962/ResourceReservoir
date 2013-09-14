<div class="verticals index">
	<h2><?php echo __('Verticals'); ?></h2>
	<div class="addNewLinkOnIndex"><?php echo $this->Html->link(__('New Vertical'), array('action' => 'add')); ?></div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('vertical_name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($verticals as $vertical): ?>
	<tr>
		<td><?php echo h($vertical['Vertical']['id']); ?>&nbsp;</td>
		<td><?php echo h($vertical['Vertical']['vertical_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vertical['User']['id'], array('controller' => 'users', 'action' => 'view', $vertical['User']['id'])); ?>
		</td>
		<td><?php echo h($vertical['Vertical']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($vertical['Vertical']['created']); ?>&nbsp;</td>
		<td><?php echo h($vertical['Vertical']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vertical['Vertical']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vertical['Vertical']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vertical['Vertical']['id']), null, __('Are you sure you want to delete # %s?', $vertical['Vertical']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Reporting Units'), array('controller' => 'runits', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List User Info'), array('controller' => 'userinfos', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>		
		<li class="currentAction"><?php echo $this->Html->link(__('List Verticals'), array('controller' => 'verticals', 'action' => 'index')); ?> </li>		
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
	</ul>
</div>
