<div class="legalCoverFamilyPlans index">
	<h2><?php echo __('Legal Cover Family Plans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_provider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active'); ?></th>
			<th><?php echo $this->Paginator->sort('sort_order'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_frequency'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('function_name'); ?></th>
			<th><?php echo $this->Paginator->sort('function_parameters'); ?></th>
			<th><?php echo $this->Paginator->sort('text_button'); ?></th>
			<th><?php echo $this->Paginator->sort('service_webpage'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilyPlans as $legalCoverFamilyPlan): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyPlan['LegalCoverFamilyProvider']['name'], array('controller' => 'legal_cover_family_providers', 'action' => 'view', $legalCoverFamilyPlan['LegalCoverFamilyProvider']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['name']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['sort_order']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['discount_percentage']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['payment_frequency']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['observations']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['function_name']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['function_parameters']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['text_button']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['service_webpage']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Premia'), array('controller' => 'legal_cover_family_premia', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Premium'), array('controller' => 'legal_cover_family_premia', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
