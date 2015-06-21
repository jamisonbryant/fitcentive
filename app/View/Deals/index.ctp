<div class="incentives index">
	<h2><?php echo __('Deals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('partner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($incentives as $incentive): ?>
	<tr>
		<td><?php echo h($incentive['Incentive']['id']); ?>&nbsp;</td>
		<td><?php echo h($incentive['Incentive']['name']); ?>&nbsp;</td>
		<td><?php echo h($incentive['Incentive']['description']); ?>&nbsp;</td>
		<td><?php echo h($incentive['Incentive']['cost']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($incentive['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $incentive['Partner']['id'])); ?>
		</td>
		<td><?php echo h($incentive['Incentive']['created']); ?>&nbsp;</td>
		<td><?php echo h($incentive['Incentive']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $incentive['Incentive']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incentive['Incentive']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incentive['Incentive']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $incentive['Incentive']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Incentive'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
