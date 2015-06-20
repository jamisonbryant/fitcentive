<div class="activities index">
	<h2><?php echo __('Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activities as $activity): ?>
	<tr>
		<td><?php echo h($activity['Activity']['id']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['name']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['description']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['created']); ?>&nbsp;</td>
		<td><?php echo h($activity['Activity']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activity['Activity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activity['Activity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activity['Activity']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activity['Activity']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('controller' => 'outputs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('controller' => 'outputs', 'action' => 'add')); ?> </li>
	</ul>
</div>
