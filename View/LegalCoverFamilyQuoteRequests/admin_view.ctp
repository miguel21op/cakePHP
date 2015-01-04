<div class="legalCoverFamilyQuoteRequests view">
<h2><?php echo __('Legal Cover Family Quote Request'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyQuoteRequest['User']['name'], array('controller' => 'users', 'action' => 'view', $legalCoverFamilyQuoteRequest['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Email'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Phone'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Dob'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Address'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Postcode'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insured Nif'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['insured_nif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['payment_method_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request Contact'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['request_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request Contact Timeframe'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['request_contact_timeframe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicants'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicants Age'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicants Gender'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['applicants_gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Quote Request'), array('action' => 'edit', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Quote Request'), array('action' => 'delete', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Quote Responses'); ?></h3>
	<?php if (!empty($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteResponse'])): ?>
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
	<?php foreach ($legalCoverFamilyQuoteRequest['LegalCoverFamilyQuoteResponse'] as $legalCoverFamilyQuoteResponse): ?>
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
