<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_no'); ?></th>
			<th><?php echo $this->Paginator->sort('nipc'); ?></th>
			<th><?php echo $this->Paginator->sort('company_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['created']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['modified']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['slug']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['address']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['phone_number']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['contact']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['vat_no']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['nipc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['CompanyType']['name'], array('controller' => 'company_types', 'action' => 'view', $company['CompanyType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Types'), array('controller' => 'company_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Type'), array('controller' => 'company_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
