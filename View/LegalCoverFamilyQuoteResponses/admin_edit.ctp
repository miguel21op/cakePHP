<div class="legalCoverFamilyQuoteResponses form">
<?php echo $this->Form->create('LegalCoverFamilyQuoteResponse'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Legal Cover Family Quote Response'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('legal_cover_family_plan_id');
		echo $this->Form->input('legal_cover_family_quote_request_id');
		echo $this->Form->input('premium');
		echo $this->Form->input('plan_name');
		echo $this->Form->input('company_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilyQuoteResponse.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilyQuoteResponse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
