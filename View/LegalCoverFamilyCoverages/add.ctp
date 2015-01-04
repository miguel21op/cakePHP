<div class="legalCoverFamilyCoverages form">
<?php echo $this->Form->create('LegalCoverFamilyCoverage'); ?>
	<fieldset>
		<legend><?php echo __('Add Legal Cover Family Coverage'); ?></legend>
	<?php
		echo $this->Form->input('legal_cover_family_plan_id');
		echo $this->Form->input('legal_cover_family_coverages_description_id');
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

		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages Descriptions'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverages Description'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
