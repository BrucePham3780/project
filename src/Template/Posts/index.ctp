<div class="users form large-9 medium-8 columns content">
	<h1>Uploadfile</h1>
	<div class="content">
		<div class="upload-form">
	 		<?php echo $this->Form->create($post, ['type' => 'file'])?>
			<?php echo $this->Form->input('file',['type'=>'file','class'=>'form-control']); ?>
			<?php echo $this->Form->button(__('Upload File',['type'=>'submit','class'=>'form-controlbtn brn-default'])); ?>
			<?php echo $this->Form->end(); ?>

	 	</div>
	</div>
</div>