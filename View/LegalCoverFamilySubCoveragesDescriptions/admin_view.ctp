<div class="legalCoverFamilySubCoveragesDescriptions view">
<h2><?php echo __('Legal Cover Family Sub Coverages Description'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['sort_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Sub Coverages Description'), array('action' => 'edit', $legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Sub Coverages Description'), array('action' => 'delete', $legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoveragesDescription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages Descriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverages Description'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Sub Coverages'); ?></h3>
	<?php if (!empty($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoverage'])): ?>
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
	<?php foreach ($legalCoverFamilySubCoveragesDescription['LegalCoverFamilySubCoverage'] as $legalCoverFamilySubCoverage): ?>
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
