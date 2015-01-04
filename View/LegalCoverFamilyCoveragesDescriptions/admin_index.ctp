<div class="legalCoverFamilyCoveragesDescriptions index">
	<h2><?php echo __('Legal Cover Family Coverages Descriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('sort_order'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilyCoveragesDescriptions as $legalCoverFamilyCoveragesDescription): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['name']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['sort_order']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoveragesDescription['LegalCoverFamilyCoveragesDescription']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverages Description'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
	</ul>
</div>
