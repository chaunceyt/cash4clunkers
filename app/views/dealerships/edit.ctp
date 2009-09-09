<div class="dealerships form">
<?php echo $form->create('Dealership');?>
	<fieldset>
 		<legend><?php __('Edit Dealership');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('dealername');
		echo $form->input('address');
		echo $form->input('address2');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
		echo $form->input('phone');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Dealership.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Dealership.id'))); ?></li>
		<li><?php echo $html->link(__('List Dealerships', true), array('action' => 'index'));?></li>
	</ul>
</div>
