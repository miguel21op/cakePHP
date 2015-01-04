<div class="companies form">
<?php echo $this->Form->create('Company',array('enctype'=>'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Admin add Company'); ?></legend>
	<?php
		echo $this->Form->input('company_type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('upload', array('type'=>'file'));
		echo $this->Form->input('address');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('contact');
		echo $this->Form->input('vat_no');
		echo $this->Form->input('nipc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions">
	<style scoped>
          .backbt a{
          	background: red !important;
          	color:white !important;
          	font-style:normal !important;
          	font-size:1em;
          	text-decoration:none !important;
          	text-shadow:red 0 0 0 !important;
          }
	</style>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li class="backbt"><?php echo $this->Html->link(__('Admin options'), array('controller'=>'dashboard','action' => 'index')); ?></li>
		
	</ul>
</div>
