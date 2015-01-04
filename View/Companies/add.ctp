<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Add Company'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('address');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('phone_number');
		echo $this->Form->input('contact');
		echo $this->Form->input('vat_no');
		echo $this->Form->input('nipc');
		echo $this->Form->input('company_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Types'), array('controller' => 'company_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Type'), array('controller' => 'company_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
