<div class="incentives view">
<h2><?php echo __('Incentive'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($incentive['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $incentive['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($incentive['Incentive']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Incentive'), array('action' => 'edit', $incentive['Incentive']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Incentive'), array('action' => 'delete', $incentive['Incentive']['id']), array(), __('Are you sure you want to delete # %s?', $incentive['Incentive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incentive'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($incentive['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Tokens'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($incentive['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['tokens']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
