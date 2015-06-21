<div class="intakes view">
<h2><?php echo __('intake'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($intake['intake']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($intake['intake']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($intake['intake']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($intake['User']['name'], array('controller' => 'users', 'action' => 'view', $intake['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($intake['intake']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($intake['intake']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit intake'), array('action' => 'edit', $intake['intake']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete intake'), array('action' => 'delete', $intake['intake']['id']), array(), __('Are you sure you want to delete # %s?', $intake['intake']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List intakes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New intake'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
