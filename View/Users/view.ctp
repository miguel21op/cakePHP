<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legal Cover Family Quote Requests'); ?></h3>
	<?php if (!empty($user['LegalCoverFamilyQuoteRequest'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Insured Name'); ?></th>
		<th><?php echo __('Insured Email'); ?></th>
		<th><?php echo __('Insured Phone'); ?></th>
		<th><?php echo __('Insured Dob'); ?></th>
		<th><?php echo __('Insured Address'); ?></th>
		<th><?php echo __('Insured Postcode'); ?></th>
		<th><?php echo __('Insured Nif'); ?></th>
		<th><?php echo __('Payment Method Id'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('Request Contact'); ?></th>
		<th><?php echo __('Request Contact Timeframe'); ?></th>
		<th><?php echo __('Applicants'); ?></th>
		<th><?php echo __('Applicants Age'); ?></th>
		<th><?php echo __('Applicants Gender'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['LegalCoverFamilyQuoteRequest'] as $legalCoverFamilyQuoteRequest): ?>
		<tr>
			<td><?php echo $legalCoverFamilyQuoteRequest['id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['user_id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_name']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_email']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_phone']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_dob']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_address']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_postcode']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['insured_nif']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['payment_method_id']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['start_date']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['request_contact']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['request_contact_timeframe']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['applicants']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['applicants_age']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['applicants_gender']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['created']; ?></td>
			<td><?php echo $legalCoverFamilyQuoteRequest['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'view', $legalCoverFamilyQuoteRequest['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'edit', $legalCoverFamilyQuoteRequest['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'delete', $legalCoverFamilyQuoteRequest['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteRequest['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['body']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array(), __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
