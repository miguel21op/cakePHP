<div class="dashboard">
	<h2 class="leftp"><?php echo __('Área de Administração'); ?></h2>

	<div class="actions">
		<style scoped>
	          
	           #divider{
	           	margin-top:15px;
	          	border-top:1px solid grey;
	          	height:15px;
	          	display:block;
	          }

		</style>
		<ul>
			<li><?php echo $this->Html->link(__('Companies'), array('controller'=>'companies','action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Providers'), array('controller' => 'legal_cover_family_providers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Plans'), array('controller' => 'legal_cover_family_plans', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Coverages'), array('controller' => 'legal_cover_family_coverages', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Sub-coverages'), array('controller' => 'legal_cover_family_sub_coverages', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Premia'), array('controller' => 'legal_cover_family_premia', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Requests'), array('controller' => 'legal_cover_family_quote_requests', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Responses'), array('controller' => 'legal_cover_family_quote_responses', 'action' => 'index')); ?> </li>
			<div id="divider"></div>
			<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
			<li class='backbt'><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout',$this->params['prefix'] => false)); ?> </li>
			
		</ul>
	</div>
	<div class="sideright">

	<?php /*foreach($companies as $post): 

	$date=$post['Payment']['created'];
    $date= date("Y-m-d", strtotime($date));
	?>
	<?php endforeach; */?>

		<h3>Dashboard synopsis</h3>
			<div class="dashtable">

				<div class="header_t">&nbsp;</div><div class="header_t">Product</div><div class="header_t">Requests</div><div class="header_t">Sales</div>
				
				<ul class="side_t">
					<li>Today</li>
					<li>This week</li>
					<li>This month</li>
					<li>This year</li>
				</ul>
				<div id="data_block">
					 <div class="data_line">
					 	<div class="data_elem prod" id="prd_d">&nbsp;</div>
					 	<div class="data_elem req" id="req_d">&nbsp;</div>
					 	<div class="data_elem sel" id="sel_d">&nbsp;</div>
					 </div>
					 <div class="data_line">
					 	<div class="data_elem prod" id="prd_w">&nbsp;</div>
					 	<div class="data_elem req" id="req_w">&nbsp;</div>
					 	<div class="data_elem sel" id="sel_w">&nbsp;</div>
					 </div>
					 <div class="data_line">
					 	<div class="data_elem prod" id="prd_m">&nbsp;</div>
					 	<div class="data_elem req" id="req_m">&nbsp;</div>
					 	<div class="data_elem sel" id="sel_m">&nbsp;</div>
					 </div>
					 <div class="data_line">
					 	<div class="data_elem prod" id="prd_y">&nbsp;</div>
					 	<div class="data_elem req" id="req_y">&nbsp;</div>
					 	<div class="data_elem sel" id="sel_y">&nbsp;</div>
					 </div>
				</div>

			</div>

	</div>

</div>
<script>
	document.getElementById('sel_d').innerHTML="<?php echo $somaq.' €'; ?>";
	document.getElementById('prd_d').innerHTML="Seguro de proteção legal";
	document.getElementById('req_d').innerHTML="<?php echo $recCount; ?>";
</script>
