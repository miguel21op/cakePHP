<div class="companyTypes view">
<h2><?php echo __('Company Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyType['CompanyType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($companyType['CompanyType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companyType['CompanyType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($companyType['CompanyType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company Type'), array('action' => 'edit', $companyType['CompanyType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company Type'), array('action' => 'delete', $companyType['CompanyType']['id']), array(), __('Are you sure you want to delete # %s?', $companyType['CompanyType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($companyType['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Zip Code'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Vat No'); ?></th>
		<th><?php echo __('Nipc'); ?></th>
		<th><?php echo __('Company Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyType['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['created']; ?></td>
			<td><?php echo $company['modified']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td><?php echo $company['slug']; ?></td>
			<td><?php echo $company['address']; ?></td>
			<td><?php echo $company['zip_code']; ?></td>
			<td><?php echo $company['phone_number']; ?></td>
			<td><?php echo $company['contact']; ?></td>
			<td><?php echo $company['vat_no']; ?></td>
			<td><?php echo $company['nipc']; ?></td>
			<td><?php echo $company['company_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), array(), __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
