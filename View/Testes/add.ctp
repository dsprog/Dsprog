<div class="testes form">
<?php echo $this->Form->create('Testis'); ?>
	<fieldset>
		<legend><?php echo __('Add Testis'); ?></legend>
	<?php
		echo $this->Form->input('texto');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Testes'), array('action' => 'index')); ?></li>
	</ul>
</div>
