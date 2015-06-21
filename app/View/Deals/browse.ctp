<?php $this->assign('title', 'Browse Deals'); ?>

<?php if (count($deals) > 0): ?>
    <h2>Browse Deals</h2>

    <div class="section white">
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
                <?php foreach ($deals as $n => $deal): ?>
                    <tr>
                        <td><?php echo $n + 1; ?></td>
                        <td><?php echo $deal['Deal']['name']; ?></td>
                        <td class="truncate">
                            <?php echo !empty($deal['Deal']['description']) ? $deal['Deal']['description'] : '--'; ?>
                        </td>
                        <td class="actions">
                            <?php
                            echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-action-visibility')),
                                '/deals/view/' . $deal['Deal']['id'], array('escape' => false));

                            echo $this->Html->link($this->Html->tag('i', '', array('class' => 'mdi-editor-mode-edit')),
                                '/deals/edit/' . $deal['Deal']['id'], array('escape' => false));

                            echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'mdi-action-delete')),
                                '/deals/delete/' . $deal['Deal']['id'], array('escape' => false));
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <div id="empty">
        <i class="mdi-maps-local-play text-lighten-1 medium grey-text"></i>
        <h5 class="grey-text text-darken-2">No deals found</h5>
        <p class="grey-text text-darken-2">To add one, click the Add button on the bottom right of the screen.</p>
    </div>
<?php endif; ?>