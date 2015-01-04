<div class="legalCoverFamilyPremia form">
<?php echo $this->Form->create('LegalCoverFamilyPremium'); ?>
	<fieldset>
		<legend><?php echo __('Edit Legal Cover Family Premium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('legal_cover_family_plan_id');
		echo $this->Form->input('m_premium');
		echo $this->Form->input('f_premium');
		echo $this->Form->input('min_age');
		echo $this->Form->input('max_age');
		echo $this->Form->input('mensal_rate');
		echo $this->Form->input('trimestral_rate');
		echo $this->Form->input('semestral_rate');
		echo $this->Form->input('min_amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilyPremium.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilyPremium.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Premia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
