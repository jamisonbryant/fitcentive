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
        <?php echo $this->Html->link('Condos', '/condos/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Owners', '/owners/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Renters', '/renters/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Guests', '/guests/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Passes', '/passes/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Wristbands', '/wristbands/manage'); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Vehicles', '/vehicles/manage'); ?>
    </li>

    <li class="divider"></li>

    <!-- Other links -->
    <li class="bold">
        <i class="mdi-action-bug-report small"></i>
        <?php echo $this->Html->link('Report Bug', '/bugs/report'); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-settings small"></i>
        <?php echo $this->Html->link('Settings', '/users/settings'); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-help small"></i>
        <?php echo $this->Html->link('Get Help', '/pages/help'); ?>
    </li>
</ul>