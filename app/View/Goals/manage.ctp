<?php $this->assign('title', 'Manage Goals'); ?>

<?php if (count($goals) > 0): ?>
    <table class="hoverable responsive-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($goals as $n => $goal): ?>
            <tr>
                <td><?php echo $n + 1; ?></td>
                <td><?php echo $goal['Goal']['name']; ?></td>
                <td class="truncate">
                    <?php echo !empty($goal['Goal']['description']) ? $goal['Goal']['description'] : '--'; ?>
                </td>
                <td class="actions">
                    <?php
                    echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-action-visibility')),
                        '/goals/view/' . $goal['Goal']['id'], array('escape' => false));

                    echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-editor-mode-edit')),
                        '/goals/edit/' . $goal['Goal']['id'], array('escape' => false));

                    echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'mdi-action-delete')),
                        '/goals/delete/' . $goal['Goal']['id'], array('escape' => false));
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div id="empty">
        <i class="mdi-image-tag-faces text-lighten-1 medium grey-text"></i>
        <h5 class="grey-text text-darken-2">No goals found</h5>
        <p class="grey-text text-darken-2">To add one, click the Add button on the bottom right of the screen.</p>
    </div>
<?php endif; ?>

<div class="fixed-action-btn" style="bottom: 100px; right: 50px;">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'large mdi-content-add')), '/goals/add',
        array('escape' => false, 'class' => 'btn-floating btn-large orange')); ?>
</div>