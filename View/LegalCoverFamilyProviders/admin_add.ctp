<div class="legalCoverFamilyProviders form">
<?php echo $this->Form->create('LegalCoverFamilyProvider'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Legal Cover Family Provider'); ?></legend>
	<?php
		echo $this->Form->input('company_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?></li>
		<li class="backbt"><?php echo $this->Html->link(__('Admin Menu'), array('controller'=>'dashboard','action' => 'index')); ?></li>
	</ul>
</div>
