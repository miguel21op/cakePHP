<div class="legalCoverFamilyCoverages index">
	<h2><?php echo __('Legal Cover Family Coverages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_plan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_coverages_description_id'); ?></th>
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
	<?php foreach ($legalCoverFamilyCoverages as $legalCoverFamilyCoverage): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyCoverage['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyCoverage['LegalCoverFamilyPlan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyCoverage['LegalCoverFamilyCoveragesDescription']['name'], array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'view', $legalCoverFamilyCoverage['LegalCoverFamilyCoveragesDescription']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['amount']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['co_payment']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['excess_amount']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['comparticipation_in']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['comparticipation_out']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['grace_period']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoverage['LegalCoverFamilyCoverage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages Descriptions'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverages Description'), array('controller' => 'legal_cover_family_coverages_descriptions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Sub Coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Sub Coverage'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
