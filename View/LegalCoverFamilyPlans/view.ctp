<div class="legalCoverFamilyPlans view">
<h2><?php echo __('Legal Cover Family Plan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyPlan['LegalCoverFamilyProvider']['name'], array('controller' => 'legal_cover_family_providers', 'action' => 'view', $legalCoverFamilyPlan['LegalCoverFamilyProvider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['sort_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Percentage'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['discount_percentage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Frequency'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['payment_frequency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['function_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function Parameters'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['function_parameters']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Button'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['text_button']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service Webpage'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['service_webpage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyPlan['LegalCoverFamilyPlan']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Plan'), array('action' => 'edit', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Plan'), array('action' => 'delete', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPlan['LegalCoverFamilyPlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Coverages'); ?></h3>
	<?php if (!empty($legalCoverFamilyPlan['LegalCoverFamilyCoverage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Plan Id'); ?></th>
		<th><?php echo __('Legal Cover Family Coverages Description Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Co Payment'); ?></th>
		<th><?php echo __('Excess Amount'); ?></th>
		<th><?php echo __('Comparticipation In'); ?></th>
		<th><?php echo __('Comparticipation Out'); ?></th>
		<th><?php echo __('Grace Period'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($legalCoverFamilyPlan['LegalCoverFamilyCoverage'] as $legalCoverFamilyCoverage): ?>
		<tr>
			<td><?php echo $legalCoverFamilyCoverage['id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['legal_cover_family_plan_id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['legal_cover_family_coverages_description_id']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['amount']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['co_payment']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['excess_amount']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['comparticipation_in']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['comparticipation_out']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['grace_period']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['created']; ?></td>
			<td><?php echo $legalCoverFamilyCoverage['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_coverages', 'action' => 'view', $legalCoverFamilyCoverage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_coverages', 'action' => 'edit', $legalCoverFamilyCoverage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_coverages', 'action' => 'delete', $legalCoverFamilyCoverage['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyCoverage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Coverage'), array('controller' => 'legal_cover_family_coverages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Premia'); ?></h3>
	<?php if (!empty($legalCoverFamilyPlan['LegalCoverFamilyPremium'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Legal Cover Family Plan Id'); ?></th>
		<th><?php echo __('M Premium'); ?></th>
		<th><?php echo __('F Premium'); ?></th>
		<th><?php echo __('Min Age'); ?></th>
		<th><?php echo __('Max Age'); ?></th>
		<th><?php echo __('Mensal Rate'); ?></th>
		<th><?php echo __('Trimestral Rate'); ?></th>
		<th><?php echo __('Semestral Rate'); ?></th>
		<th><?php echo __('Min Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($legalCoverFamilyPlan['LegalCoverFamilyPremium'] as $legalCoverFamilyPremium): ?>
		<tr>
			<td><?php echo $legalCoverFamilyPremium['id']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['legal_cover_family_plan_id']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['m_premium']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['f_premium']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['min_age']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['max_age']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['mensal_rate']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['trimestral_rate']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['semestral_rate']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['min_amount']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['created']; ?></td>
			<td><?php echo $legalCoverFamilyPremium['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_premia', 'action' => 'view', $legalCoverFamilyPremium['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_premia', 'action' => 'edit', $legalCoverFamilyPremium['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_premia', 'action' => 'delete', $legalCoverFamilyPremium['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyPremium['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Premium'), array('controller' => 'legal_cover_family_premia', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Quote Responses'); ?></h3>
	<?php if (!empty($legalCoverFamilyPlan['LegalCoverFamilyQuoteResponse'])): ?>
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
	<?php foreach ($legalCoverFamilyPlan['LegalCoverFamilyQuoteResponse'] as $legalCoverFamilyQuoteResponse): ?>
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
