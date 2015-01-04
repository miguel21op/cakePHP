<div class="legalCoverFamilyProviders form">
<?php echo $this->Form->create('LegalCoverFamilyProvider'); ?>
	<fieldset>
		<legend><?php echo __('Edit Legal Cover Family Provider'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LegalCoverFamilyProvider.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LegalCoverFamilyProvider.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
