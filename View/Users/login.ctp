<?php
// file: /app/views/users/login.ctp
?>
<div class="login form">
<style scoped>
 .inputlog{
 	height:12px;
 	font-size: 1.1em;
 }

</style>
	<?php echo $this->Form->create('User',array('action'=>'login'));?>
	<fieldset>
 		<legend>Enter your credentials</legend>
		<?php
		echo $this->Form->input('name',array('style'=>'width:180px','class'=>'inputlog'));
		echo $this->Form->input('password',array('style'=>'width:180px','class'=>'inputlog'));
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