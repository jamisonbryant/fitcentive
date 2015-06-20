<div class="partners view">
<h2><?php echo __('Partner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partner'), array('action' => 'edit', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner'), array('action' => 'delete', $partner['Partner']['id']), array(), __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incentives'), array('controller' => 'incentives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incentive'), array('controller' => 'incentives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Incentives'); ?></h3>
	<?php if (!empty($partner['Incentive'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($partner['Incentive'] as $incentive): ?>
		<tr>
			<td><?php echo $incentive['id']; ?></td>
			<td><?php echo $incentive['name']; ?></td>
			<td><?php echo $incentive['description']; ?></td>
			<td><?php echo $incentive['cost']; ?></td>
			<td><?php echo $incentive['partner_id']; ?></td>
			<td><?php echo $incentive['created']; ?></td>
			<td><?php echo $incentive['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incentives', 'action' => 'view', $incentive['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incentives', 'action' => 'edit', $incentive['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incentives', 'action' => 'delete', $incentive['id']), array(), __('Are you sure you want to delete # %s?', $incentive['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Incentive'), array('controller' => 'incentives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
