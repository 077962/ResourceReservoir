<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Please enter your username and password'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('NTT DATA'); ?></h3>	
	<h4>Resource Management Tool</h4>		
</div>