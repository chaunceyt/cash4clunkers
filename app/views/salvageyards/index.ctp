<div class="salvageyards index">
<h2><?php __('Salvageyards');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('address');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('uniqueid');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($salvageyards as $salvageyard):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $salvageyard['Salvageyard']['id']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['name']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['address']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['city']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['state']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['zip']; ?>
		</td>
		<td>
			<?php echo $salvageyard['Salvageyard']['uniqueid']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $salvageyard['Salvageyard']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $salvageyard['Salvageyard']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $salvageyard['Salvageyard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salvageyard['Salvageyard']['id'])); ?>
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
		<li><?php echo $html->link(__('New Salvageyard', true), array('action' => 'add')); ?></li>
	</ul>
</div>
