<div class="legalCoverFamilyPlans form">
<?php echo $this->Form->create('LegalCoverFamilyPlan'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Legal Cover Family Plan'); ?></legend>
	<?php
		echo $this->Form->input('legal_cover_family_provider_id');
		echo $this->Form->input('name');
		echo $this->Form->input('is_active');
		echo $this->Form->input('sort_order');
		echo $this->Form->input('discount_percentage');
		echo $this->Form->input('payment_frequency');
		echo $this->Form->input('observations');
		echo $this->Form->input('function_name');
		echo $this->Form->input('function_parameters');
		echo $this->Form->input('text_button');
		echo $this->Form->input('service_webpage');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Premia'), array('controller' => 'legal_cover_family_premia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Premium'), array('controller' => 'legal_cover_family_premia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
