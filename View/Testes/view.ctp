<div class="testes view">
<h2><?php  echo __('Testis'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($testis['Testis']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($testis['Testis']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($testis['Testis']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($testis['Testis']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($testis['Testis']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Testis'), array('action' => 'edit', $testis['Testis']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Testis'), array('action' => 'delete', $testis['Testis']['id']), null, __('Are you sure you want to delete # %s?', $testis['Testis']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Testes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Testis'), array('action' => 'add')); ?> </li>
	</ul>
</div>
