<div class="salvageyards form">
<?php echo $form->create('Salvageyard');?>
	<fieldset>
 		<legend><?php __('Edit Salvageyard');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('address');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
		echo $form->input('uniqueid');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Salvageyard.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Salvageyard.id'))); ?></li>
		<li><?php echo $html->link(__('List Salvageyards', true), array('action' => 'index'));?></li>
	</ul>
</div>
