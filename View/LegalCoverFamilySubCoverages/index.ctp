<div class="legalCoverFamilySubCoverages index">
	<h2><?php echo __('Legal Cover Family Sub Coverages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_coverage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_sub_coverages_description_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('co_payment'); ?></th>
			<th><?php echo $this->Paginator->sort('excess_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('comparticipation_in'); ?></th>
			<th><?php echo $this->Paginator->sort('comparticipation_out'); ?></th>
			<th><?php echo $this->Paginator->sort('grace_period'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilySubCoverages as $legalCoverFamilySubCoverage): ?>
	<tr>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilySubCoverage['LegalCoverFamilyCoverage']['id'], array('controller' => 'legal_cover_family_coverages', 'action' => 'view', $legalCoverFamilySubCoverage['LegalCoverFamilyCoverage']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilySubCoverage['LegalCoverFamilySubCoveragesDescription']['name'], array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'view', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoveragesDescription']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['amount']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['co_payment']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['excess_amount']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['comparticipation_in']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['comparticipation_out']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['grace_period']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilySubCoverage['LegalCoverFamilySubCoverage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages Descriptions'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverages Description'), array('controller' => 'legal_cover_family_sub_coverages_descriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
