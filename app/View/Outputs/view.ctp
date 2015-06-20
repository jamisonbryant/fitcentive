<div class="outputs view">
<h2><?php echo __('Output'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($output['Output']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($output['Output']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($output['User']['name'], array('controller' => 'users', 'action' => 'view', $output['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($output['Output']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($output['Output']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Output'), array('action' => 'edit', $output['Output']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Output'), array('action' => 'delete', $output['Output']['id']), array(), __('Are you sure you want to delete # %s?', $output['Output']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Outputs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Output'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
