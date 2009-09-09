<div class="salvageyards form">
<?php echo $form->create('Salvageyard');?>
	<fieldset>
 		<legend><?php __('Add Salvageyard');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Salvageyards', true), array('action' => 'index'));?></li>
	</ul>
</div>
