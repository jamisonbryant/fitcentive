<nav class="light-green lighten-1">
    <div class="nav-wrapper">
        <?php echo $this->Html->link($this->fetch('title'), $this->here, array('id' => 'title')); ?>

        <ul id="navmenu" class="right hide-on-med-and-down">
            <!-- Healthbar -->
            <li>
                <?php echo $this->element('healthbar'); ?>
            </li>

            <!-- Stats -->
            <?php $stats = $this->requestAction('/users/stats'); ?>
            <li>
                <?php echo $this->Html->link('<i class="mdi-maps-local-restaurant left"></i>350',
                    '/intake/manage', array('escape' => false)); ?> in
            </li>

            <li>
                <?php echo $this->Html->link('<i class="mdi-maps-directions-bike left"></i>1000',
                    '/output/manage', array('escape' => false)); ?> out
            </li>

            <li>
                <?php echo $this->Html->link('<i class="mdi-editor-format-size left"></i>330',
                    '/output/manage', array('escape' => false)); ?>
            </li>

            <li>
                <?php echo $this->Html->link('<i class="mdi-action-lock-open left"></i>',
                    '/users/logout', array('escape' => false)); ?>
            </li>
        </ul>
    </div>
</nav>