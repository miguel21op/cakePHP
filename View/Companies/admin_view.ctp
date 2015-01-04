<div class="companies view">
	<style scoped>
     .viewblock {
     	width:600px;
     	display:inline-block;
     	/*border:1px solid #003d4c; */
     	border:none;
     	height:400px;
     	padding:4px;
     }
     .right{
     	position: absolute;
     	right:0;
     }
	</style>
		<h2><?php echo __('Company view'); ?></h2>
		<div class ="viewblock">
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
				<dt><?php echo __('NIPC'); ?></dt>
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
		<div class="viewblock right">
		<?php $generalpath=Configure::read('uploadsPath');
        $imgname= $company['Company']['upload'];
        
        if (empty($imgname)):
        	$imgname="void.jpg";
        endif;
		?>
		<img src="<?php echo $generalpath.$imgname;?>">
		</div>
</style>
<div class="actions" style="position:absolute;left:0;top:80px">
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
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), array(), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Types'), array('controller' => 'company_types', 'action' => 'index')); ?> </li>
		<li class="backbt"><?php echo $this->Html->link(__('Admin Menu'), array('controller'=>'dashboard','action' => 'index')); ?></li>
		
	</ul>
</div>

