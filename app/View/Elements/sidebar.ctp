<ul class="side-nav fixed">
    <!-- Logo -->
    <li id="logo">
        <?php echo $this->Html->link($this->Html->image('logos/color.png'), '/', array('escape' => false)); ?>
    </li>

    <!-- Quick links -->
    <li class="bold">
        <i class="mdi-action-dashboard small"></i>
        <?php echo $this->Html->link('Dashboard', '/users/dashboard'); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-account-circle small"></i>
        <?php echo $this->Html->link('My Account', '/users/account'); ?>
    </li>

    <li class="divider"></li>

    <!-- Action links -->
    <li>
        <?php echo $this->Html->link('Food', '/intakes/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Exercise', '/outputs/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Events', '/events/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Incentives', '/incentives/manage'); ?>
    </li>

    <li class="divider"></li>

    <!-- Other links -->
    <li class="bold">
        <i class="mdi-action-bug-report small"></i>
        <?php echo $this->Html->link('Report Bug', 'javascript:void(0);'); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-settings small"></i>
        <?php echo $this->Html->link('Settings', 'javascript:void(0);'); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-help small"></i>
        <?php echo $this->Html->link('Help & Support', 'javascript:void(0);'); ?>
    </li>
</ul>