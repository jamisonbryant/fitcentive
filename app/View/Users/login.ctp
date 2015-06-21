<?php $this->assign('title', 'Welcome'); ?>

<!-- Styles -->
<style>
    #buttons {
        text-align: center;
    }

    #buttons .btn-large:not(:last-of-type) {
        margin-right: 15px;
    }
</style>

<!-- Login links -->
<div id="buttons">
    <?php echo $this->Html->link('Log In With Facebook', '/users/login/facebook',
        array('class' => 'btn-large waves-effect waves-light indigo darken-2')); ?>

    <?php echo $this->Html->link('Log In With Twitter', '/users/login/twitter',
        array('class' => 'btn-large waves-effect waves-light blue')); ?>

    <?php echo $this->Html->link('Log In With Google+', '/users/login/google+',
        array('class' => 'btn-large waves-effect waves-light red darken-1')); ?>

    <?php echo $this->Html->link('Log In With Fitcentive', '/users/login/fitcentive',
        array('class' => 'btn-large waves-effect waves-light pink lighten-2')); ?>
</div>
