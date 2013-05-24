<?php
$this->TinyMCE->editor(array(
		'mode' => 'exact',
		'language' => 'pt',
		'theme' => 'advanced',
		'elements' => 'ContentBody',
		'theme_advanced_toolbar_location' => 'top',
		'theme_advanced_toolbar_align' => 'left',
		'theme_advanced_resizing' => true,
		'skin' => 'o2k7',
		'skin_variant' => 'silver',
		'height' => '300px',
		'width' => '80%'
	)
); ?>
<div class="contents form">
<?php echo $this->Form->create('Content', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Content'); ?></legend>
	<?php
		echo $this->Form->input('parent_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('slug');
		echo $this->Form->input('body');
		echo $this->Form->input('excerpt');
		echo $this->Form->input('status');
		echo $this->Form->input('image', array('type' => 'file'));
		echo $this->Form->input('image_dir', array('type' => 'hidden'));
		echo $this->Form->input('promote');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
