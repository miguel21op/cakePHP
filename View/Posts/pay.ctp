<div class="posts form">

<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Pay your Purchase'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

		<div class="pagam">
		<style scoped>
		 .pagam img{

		 	width:300px;
		    height:auto;
		    position: relative;
		    float:right;
		    top:-140px;
		    right:40px;
		 }

		</style>
		<?php
		echo $this->Html->link($this->Html->image("slide1b.jpg", array("alt" => "alt-tag")),"#", array('class' => 'multi', 'escape' => false,'onclick'=>'alert(\'isto\')'));

		?>
		</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('Back'), array('action' => 'index')); ?></li>

	</ul>
</div>
