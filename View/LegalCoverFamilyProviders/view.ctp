<div class="legalCoverFamilyProviders view">
<h2><?php echo __('Legal Cover Family Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyProvider['Company']['name'], array('controller' => 'companies', 'action' => 'view', $legalCoverFamilyProvider['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyProvider['LegalCoverFamilyProvider']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Provider'), array('action' => 'edit', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Provider'), array('action' => 'delete', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyProvider['LegalCoverFamilyProvider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Plans'); ?></h3>
	<?php if (!empty($legalCoverFamilyProvider['LegalCoverFamilyPlan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Provider Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Sort Order'); ?></th>
		<th><?php echo __('Discount Percentage'); ?></th>
		<th><?php echo __('Payment Frequency'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Function Name'); ?></th>
		<th><?php echo __('Function Parameters'); ?></th>
		<th><?php echo __('Text Button'); ?></th>
		<th><?php echo __('Service Webpage'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($legalCoverFamilyProvider['LegalCoverFamilyPlan'] as $legalCoverFamilyPlan): ?>
		<tr>
			<td><?php echo $legalCoverFamilyPlan['id']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['legal_cover_family_provider_id']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['name']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['is_active']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['sort_order']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['discount_percentage']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['payment_frequency']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['observations']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['function_name']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['function_parameters']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['text_button']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['service_webpage']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['created']; ?></td>
			<td><?php echo $legalCoverFamilyPlan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyPlan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_plans', 'action' => 'edit', $legalCoverFamilyPlan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_plans', 'action' => 'delete', $legalCoverFamilyPlan['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPlan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
