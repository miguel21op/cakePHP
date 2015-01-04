<div class="legalCoverFamilyQuoteResponses index">
	<h2><?php echo __('Legal Cover Family Quote Responses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_plan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_quote_request_id'); ?></th>
			<th><?php echo $this->Paginator->sort('premium'); ?></th>
			<th><?php echo $this->Paginator->sort('plan_name'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilyQuoteResponses as $legalCoverFamilyQuoteResponse): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyQuoteResponse['LegalCoverFamilyPlan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteRequest']['id'], array('controller' => 'legal_cover_family_quote_requests', 'action' => 'view', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteRequest']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['premium']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['plan_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['Company']['name'], array('controller' => 'companies', 'action' => 'view', $legalCoverFamilyQuoteResponse['Company']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
