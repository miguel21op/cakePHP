<div class="legalCoverFamilyPremia view">
<h2><?php echo __('Legal Cover Family Premium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyPremium['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyPremium['LegalCoverFamilyPlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Premium'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['m_premium']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Premium'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['f_premium']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Age'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['min_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Age'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['max_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensal Rate'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['mensal_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trimestral Rate'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['trimestral_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Semestral Rate'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['semestral_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Amount'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['min_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Premium'), array('action' => 'edit', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Premium'), array('action' => 'delete', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Premia'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Premium'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
