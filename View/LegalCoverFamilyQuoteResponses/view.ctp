<div class="legalCoverFamilyQuoteResponses view">
<h2><?php echo __('Legal Cover Family Quote Response'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['LegalCoverFamilyPlan']['name'], array('controller' => 'legal_cover_family_plans', 'action' => 'view', $legalCoverFamilyQuoteResponse['LegalCoverFamilyPlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Cover Family Quote Request'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteRequest']['id'], array('controller' => 'legal_cover_family_quote_requests', 'action' => 'view', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteRequest']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Premium'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['premium']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan Name'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['plan_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legalCoverFamilyQuoteResponse['Company']['name'], array('controller' => 'companies', 'action' => 'view', $legalCoverFamilyQuoteResponse['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legal Cover Family Quote Response'), array('action' => 'edit', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legal Cover Family Quote Response'), array('action' => 'delete', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id']), array(), __('Are you sure you want to delete # %s?', $legalCoverFamilyQuoteResponse['LegalCoverFamilyQuoteResponse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Responses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Response'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Plan'), array('controller' => 'legal_cover_family_plans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legal Cover Family Quote Requests'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legal Cover Family Quote Request'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
