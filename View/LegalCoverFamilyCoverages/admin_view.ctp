<div class="legalCoverFamilyCoverages view">
<h2><?php echo __('Legal Cover Family Coverage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyCoverage['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyCoverage['LegalCoverFamilyPlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Coverages Description'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyCoverage['LegalCoverFamilyCoveragesDescription']['name'], array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'view', $legalCoverFamilyCoverage['LegalCoverFamilyCoveragesDescription']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Payment'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['co_payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Excess Amount'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['excess_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comparticipation In'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['comparticipation_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comparticipation Out'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['comparticipation_out']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grace Period'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['grace_period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Coverage'), array('action' => 'edit', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Coverage'), array('action' => 'delete', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages Descriptions'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverages Description'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Sub Coverages'); ?></h3>
	<?php if (!empty($legalCoverFamilyCoverage['LegalCoverFamilySubCoverage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Coverage Id'); ?></th>
		<th><?php echo __('Legal Cover Family Sub Coverages Description Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Co Payment'); ?></th>
		<th><?php echo __('Excess Amount'); ?></th>
		<th><?php echo __('Comparticipation In'); ?></th>
		<th><?php echo __('Comparticipation Out'); ?></th>
		<th><?php echo __('Grace Period'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($legalCoverFamilyCoverage['LegalCoverFamilySubCoverage'] as $legalCoverFamilySubCoverage): ?>
		<tr>
			<td><?php echo $legalCoverFamilySubCoverage['id']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['legal_cover_family_coverage_id']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['legal_cover_family_sub_coverages_description_id']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['amount']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['co_payment']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['excess_amount']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['comparticipation_in']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['comparticipation_out']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['grace_period']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['created']; ?></td>
			<td><?php echo $legalCoverFamilySubCoverage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'view', $legalCoverFamilySubCoverage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'edit', $legalCoverFamilySubCoverage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'delete', $legalCoverFamilySubCoverage['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilySubCoverage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
