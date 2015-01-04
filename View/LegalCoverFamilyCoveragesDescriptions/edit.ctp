<div class="legalCoverFamilyCoveragesDescriptions form">
<?php echo $this->Form->create('LegalCoverFamilyCoveragesDescription'); ?>
	<fieldset>
		<legend><?php echo __('Edit Legal Cover Family Coverages Description'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilyCoveragesDescription.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilyCoveragesDescription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages Descriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
