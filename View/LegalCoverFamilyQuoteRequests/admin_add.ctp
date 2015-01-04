<div class="legalCoverFamilyQuoteRequests form">
<?php echo $this->Form->create('LegalCoverFamilyQuoteRequest'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Legal Cover Family Quote Request'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('insured_name');
		echo $this->Form->input('insured_email');
		echo $this->Form->input('insured_phone');
		echo $this->Form->input('insured_dob');
		echo $this->Form->input('insured_address');
		echo $this->Form->input('insured_postcode');
		echo $this->Form->input('insured_nif');
		echo $this->Form->input('payment_method_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('request_contact');
		echo $this->Form->input('request_contact_timeframe');
		echo $this->Form->input('applicants');
		echo $this->Form->input('applicants_age');
		echo $this->Form->input('applicants_gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
