<?php
// file: /app/views/users/login.ctp
?>
<div class="login form">
	<?php echo $this->Form->create('User',array('action'=>'logout'));?>
	<fieldset>
 		<legend>Enter Your Username and Password</legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link( "Add A New User",   array('action'=>'add') ); ?></li>
		
	</ul>
</div>