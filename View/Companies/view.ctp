<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($company['Company']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($company['Company']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($company['Company']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vat No'); ?></dt>
		<dd>
			<?php echo h($company['Company']['vat_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nipc'); ?></dt>
		<dd>
			<?php echo h($company['Company']['nipc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($company['CompanyType']['name'], array('controller' => 'company_types', 'action' => 'view', $company['CompanyType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Types'), array('controller' => 'company_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company Type'), array('controller' => 'company_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Providers'); ?></h3>
	<?php if (!empty($company['LegalCoverFamilyProvider'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['LegalCoverFamilyProvider'] as $legalCoverFamilyProvider): ?>
		<tr>
			<td><?php echo $legalCoverFamilyProvider['id']; ?></td>
			<td><?php echo $legalCoverFamilyProvider['company_id']; ?></td>
			<td><?php echo $legalCoverFamilyProvider['name']; ?></td>
			<td><?php echo $legalCoverFamilyProvider['created']; ?></td>
			<td><?php echo $legalCoverFamilyProvider['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_providers', 'action' => 'view', $legalCoverFamilyProvider['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_providers', 'action' => 'edit', $legalCoverFamilyProvider['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_providers', 'action' => 'delete', $legalCoverFamilyProvider['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyProvider['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Provider'), array('controller' => 'legal_cover_family_providers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Quote Responses'); ?></h3>
	<?php if (!empty($company['LegalCoverFamilyQuoteResponse'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Plan Id'); ?></th>
		<th><?php echo __('Legal Cover Family Quote Request Id'); ?></th>
		<th><?php echo __('Premium'); ?></th>
		<th><?php echo __('Plan Name'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['LegalCoverFamilyQuoteResponse'] as $legalCoverFamilyQuoteResponse): ?>
		<tr>
			<td><?php echo $legalCoverFamilyQuoteResponse['id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['legal_cover_family_plan_id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['legal_cover_family_quote_request_id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['premium']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['plan_name']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['company_id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['created']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteResponse['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'view', $legalCoverFamilyQuoteResponse['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'edit', $legalCoverFamilyQuoteResponse['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'delete', $legalCoverFamilyQuoteResponse['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteResponse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
