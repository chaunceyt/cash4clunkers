<div class="dealerships index">
<h2><?php __('Dealerships');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('dealername');?></th>
	<th><?php echo $paginator->sort('address');?></th>
	<th><?php echo $paginator->sort('address2');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('phone');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($dealerships as $dealership):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $dealership['Dealership']['id']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['dealername']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['address']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['address2']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['city']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['state']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['zip']; ?>
		</td>
		<td>
			<?php echo $dealership['Dealership']['phone']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $dealership['Dealership']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $dealership['Dealership']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $dealership['Dealership']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dealership['Dealership']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Dealership', true), array('action' => 'add')); ?></li>
	</ul>
</div>
