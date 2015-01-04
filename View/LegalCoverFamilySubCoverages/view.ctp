<div class="legalCoverFamilySubCoverages view">
<h2><?php echo __('Legal Cover Family Sub Coverage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Coverage'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilySubCoverage['LegalCoverFamilyCoverage']['id'], array('controller' => 'legal_cover_family_coverages', 'action' => 'view', $legalCoverFamilySubCoverage['LegalCoverFamilyCoverage']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Sub Coverages Description'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilySubCoverage['LegalCoverFamilySubCoveragesDescription']['name'], array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'view', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoveragesDescription']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Payment'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['co_payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excess Amount'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['excess_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comparticipation In'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['comparticipation_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comparticipation Out'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['comparticipation_out']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grace Period'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['grace_period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Sub Coverage'), array('action' => 'edit', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Sub Coverage'), array('action' => 'delete', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages Descriptions'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverages Description'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
