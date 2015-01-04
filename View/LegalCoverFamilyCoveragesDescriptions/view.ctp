<div class="legalCoverFamilyCoveragesDescriptions view">
<h2><?php echo __('Legal Cover Family Coverages Description'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['sort_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Coverages Description'), array('action' => 'edit', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Coverages Description'), array('action' => 'delete', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages Descriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverages Description'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Coverages'); ?></h3>
	<?php if (!empty($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoverage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Plan Id'); ?></th>
		<th><?php echo __('Legal Cover Family Coverages Description Id'); ?></th>
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
	<?php foreach ($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoverage'] as $legalCoverFamilyCoverage): ?>
		<tr>
			<td><?php echo $legalCoverFamilyCoverage['id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['legal_cover_family_plan_id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['legal_cover_family_coverages_description_id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['amount']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['co_payment']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['excess_amount']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['comparticipation_in']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['comparticipation_out']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['grace_period']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['created']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_coverages', 'action' => 'view', $legalCoverFamilyCoverage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_coverages', 'action' => 'edit', $legalCoverFamilyCoverage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_coverages', 'action' => 'delete', $legalCoverFamilyCoverage['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoverage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
