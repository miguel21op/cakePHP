<div class="legalCoverFamilySubCoverages form">
<?php echo $this->Form->create('LegalCoverFamilySubCoverage'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Legal Cover Family Sub Coverage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('legal_cover_family_coverage_id');
		echo $this->Form->input('legal_cover_family_sub_coverages_description_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('co_payment');
		echo $this->Form->input('excess_amount');
		echo $this->Form->input('comparticipation_in');
		echo $this->Form->input('comparticipation_out');
		echo $this->Form->input('grace_period');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilySubCoverage.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilySubCoverage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages Descriptions'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverages Description'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
