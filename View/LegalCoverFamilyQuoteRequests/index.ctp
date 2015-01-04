<div class="legalCoverFamilyQuoteRequests index">
	<h2><?php echo __('Legal Cover Family Quote Requests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_name'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_email'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_dob'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_address'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('insured_nif'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('request_contact'); ?></th>
			<th><?php echo $this->Paginator->sort('request_contact_timeframe'); ?></th>
			<th><?php echo $this->Paginator->sort('applicants'); ?></th>
			<th><?php echo $this->Paginator->sort('applicants_age'); ?></th>
			<th><?php echo $this->Paginator->sort('applicants_gender'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilyQuoteRequests as $legalCoverFamilyQuoteRequest): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyQuoteRequest['User']['name'], array('controller' => 'users', 'action' => 'view', $legalCoverFamilyQuoteRequest['User']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_name']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_email']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_phone']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_dob']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_address']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_postcode']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_nif']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['payment_method_id']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['request_contact']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['request_contact_timeframe']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants_age']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants_gender']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
