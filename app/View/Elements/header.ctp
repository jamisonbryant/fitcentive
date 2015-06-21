<nav>
    <div class="nav-wrapper">
        <?php echo $this->Html->link($this->fetch('title'), $this->here, array('id' => 'title')); ?>

        <ul id="navmenu" class="right hide-on-med-and-down">
            <!-- Healthbar -->
            <li>
                <?php echo $this->element('healthbar'); ?>
            </li>

            <!-- Stats -->
            <li>
                <?php echo $this->Html->link('<i class="mdi-maps-local-restaurant left"></i>1500', '/intake/manage',
                    array('escape' => false)); ?>
            </li>

            <li>
                <?php echo $this->Html->link('<i class="mdi-maps-directions-bike left"></i>500', '/output/manage',
                    array('escape' => false)); ?>
            </li>

            <li>
                <?php echo $this->Html->link('<i class="mdi-editor-format-size left"></i>' . AuthComponent::user('tokens'),
                    '/output/manage', array('escape' => false)); ?>
            </li>
        </ul>
    </div>
</nav>