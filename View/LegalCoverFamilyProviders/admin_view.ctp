<div class="legalCoverFamilyProviders view">
<h2><?php echo __('Legal Cover Family Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyProvider['Company']['name'], array('controller' => 'companies', 'action' => 'view', $legalCoverFamilyProvider['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id'])); ?> </li>
		<li class="backbt"><?php echo $this->Html->link(__('Admin Menu'), array('controller'=>'dashboard','action' => 'index')); ?></li>
	</ul>
</div>


</div>
