<div class="salvageyards view">
<h2><?php  __('Salvageyard');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['zip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uniqueid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $salvageyard['Salvageyard']['uniqueid']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Salvageyard', true), array('action' => 'edit', $salvageyard['Salvageyard']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Salvageyard', true), array('action' => 'delete', $salvageyard['Salvageyard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $salvageyard['Salvageyard']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Salvageyards', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Salvageyard', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
