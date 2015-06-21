<?php $this->assign('title', 'Manage Food'); ?>

<?php if (count($intakes) > 0): ?>
    <h2>Manage Food</h2>

    <div class="section white"></div>
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
            <?php foreach ($intakes as $n => $intake): ?>
                <tr>
                    <td><?php echo $n + 1; ?></td>
                    <td><?php echo $intake['Intake']['type']; ?></td>
                    <td class="truncate">
                        <?php echo !empty($intake['Intake']['amount']) ? $intake['Intake']['amount'] : '--'; ?>
                    </td>
                    <td class="actions">
                        <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-action-visibility')),
                            '/intakes/view/' . $intake['Intake']['id'], array('escape' => false));

                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-editor-mode-edit')),
                            '/intakes/edit/' . $intake['Intake']['id'], array('escape' => false));

                        echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'mdi-action-delete')),
                            '/intakes/delete/' . $intake['Intake']['id'], array('escape' => false));
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php else: ?>
    <div id="empty">
        <i class="mdi-maps-local-restaurant text-lighten-1 medium grey-text"></i>
        <h5 class="grey-text text-darken-2">No foods found</h5>
        <p class="grey-text text-darken-2">To add one, click the Add button on the bottom right of the screen.</p>
    </div>
<?php endif; ?>

<div class="fixed-action-btn" style="bottom: 100px; right: 50px;">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'large mdi-content-add')), '/intakes/add',
        array('escape' => false, 'class' => 'btn-floating btn-large orange')); ?>
</div>