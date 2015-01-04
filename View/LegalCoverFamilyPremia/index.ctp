<div class="legalCoverFamilyPremia index">
	<h2><?php echo __('Legal Cover Family Premia'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_cover_family_plan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('m_premium'); ?></th>
			<th><?php echo $this->Paginator->sort('f_premium'); ?></th>
			<th><?php echo $this->Paginator->sort('min_age'); ?></th>
			<th><?php echo $this->Paginator->sort('max_age'); ?></th>
			<th><?php echo $this->Paginator->sort('mensal_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('trimestral_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('semestral_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('min_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($legalCoverFamilyPremia as $legalCoverFamilyPremium): ?>
	<tr>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legalCoverFamilyPremium['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyPremium['LegalCoverFamilyPlan']['id'])); ?>
		</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['m_premium']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['f_premium']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['min_age']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['max_age']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['mensal_rate']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['trimestral_rate']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['semestral_rate']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['min_amount']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['created']); ?>&nbsp;</td>
		<td><?php echo h($legalCoverFamilyPremium['LegalCoverFamilyPremium']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPremium['LegalCoverFamilyPremium']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Legal Cover Family Premium'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
