<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number','Phone'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('vat_no'); ?></th>
			<th><?php echo $this->Paginator->sort('nipc','NIPC'); ?></th>
			<th><?php echo $this->Paginator->sort('company_type_id','Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
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
	<style scoped>
          .backbt a{
          	background: red !important;
          	color:white !important;
          	font-style:normal !important;
          	font-size:1em;
          	text-decoration:none !important;
          	text-shadow:red 0 0 0 !important;
          }
	</style>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li class="backbt"><?php echo $this->Html->link(__('Admin Menu'), array('controller'=>'dashboard','action' => 'index')); ?></li>
		
	</ul>
</div>
