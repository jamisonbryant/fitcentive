<?php $this->assign('title', 'Manage Exercise'); ?>

<?php if (count($outputs) > 0): ?>
    <h2>Manage Exercise</h2>

    <div class="section white">
        <table class="hoverable responsive-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($outputs as $n => $output): ?>
                <tr>
                    <td><?php echo $n + 1; ?></td>
                    <td><?php echo $output['Output']['type']; ?></td>
                    <td class="truncate">
                        <?php echo !empty($output['Output']['amount']) ? $output['Output']['amount'] : '--'; ?>
                    </td>
                    <td class="actions">
                        <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-action-visibility')),
                            '/outputs/view/' . $output['Output']['id'], array('escape' => false));

                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-editor-mode-edit')),
                            '/outputs/edit/' . $output['Output']['id'], array('escape' => false));

                        echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'mdi-action-delete')),
                            '/outputs/delete/' . $output['Output']['id'], array('escape' => false));
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div id="empty">
        <i class="mdi-maps-directions-bike text-lighten-1 medium grey-text"></i>
        <h5 class="grey-text text-darken-2">No exercise found</h5>
        <p class="grey-text text-darken-2">To add one, click the Add button on the bottom right of the screen.</p>
    </div>
<?php endif; ?>

<div class="fixed-action-btn" style="bottom: 100px; right: 50px;">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'large mdi-content-add')), '/outputs/add',
        array('escape' => false, 'class' => 'btn-floating btn-large orange')); ?>
</div>