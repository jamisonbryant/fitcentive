<ul class="side-nav fixed">
    <!-- Logo -->
    <li id="logo">
        <?php echo $this->Html->link($this->Html->image('logo.png'), '/', array('escape' => false)); ?>
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
        <?php echo $this->Html->link('Food', '/users/intakes'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Exercise', '/users/outputs'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Events', '/events/browse'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Incentives', '/incentives/browse'); ?>
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