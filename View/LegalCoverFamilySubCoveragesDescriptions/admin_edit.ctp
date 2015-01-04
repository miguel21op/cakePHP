<div class="legalCoverFamilySubCoveragesDescriptions form">
<?php echo $this->Form->create('LegalCoverFamilySubCoveragesDescription'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Legal Cover Family Sub Coverages Description'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('sort_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilySubCoveragesDescription.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilySubCoveragesDescription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages Descriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
