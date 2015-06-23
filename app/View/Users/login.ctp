<?php $this->assign('title', 'Welcome'); ?>

<script>
    $(document).ready(function() {
        // Hide form
        $('#form .card').hide();

        $('#buttons a').on('click', function(e) {
            if ($('#form .card').is(':hidden')) {
                e.preventDefault();
            } else {
                $('#form form').submit();
                e.preventDefault();
            }

            // Shrink logo
            $('#logo img').animate({ "margin-top": "-50px", "width": "25%" }, 500);

            // Shrink motto
            $('#motto h1').animate({ "font-size": "2rem" }, 500);

            // Hide buttons
            $('#buttons a:not(#' + $(this).attr('id') + ')').fadeOut(100, function() {
                $(this).remove();
            });

            $('#form .card').fadeIn(1000);
        });
    });
</script>


<style>
    #form .card {
        margin: 0 auto 25px auto;
        width: 350px;
    }

    #buttons {
        text-align: center;
    }

    #buttons .btn-large:not(:last-of-type) {
        margin: 15px 10px;
    }

    #register {
        margin-top: 40px;
        text-align: center;
    }

    #register a {
        color: #ffffff;
    }

    #register a:hover {
        text-decoration: underline;
    }
</style>

<!-- Form -->
<div id="form">
    <?php echo $this->Form->create('User', array('inputDefaults' => array('div' => false, 'label' => false))); ?>
        <div class="card">
            <div class="card-content">
                <div class="input-field">
                    <?php echo $this->Form->input('email', array('id' => 'email', 'placeholder' => 'Email')); ?>
                </div>
                <div class="input-field">
                    <?php echo $this->Form->input('password', array('id' => 'password', 'placeholder' => 'Password')); ?>
                </div>
            </div>
        </div>

        <div id="buttons">
            <?php echo $this->Html->link('Log In With Facebook', '/users/login',
                array('class' => 'btn-large waves-effect waves-light indigo darken-2', 'id' => 'facebook')); ?>

            <?php echo $this->Html->link('Log In With Twitter', '/users/login',
                array('class' => 'btn-large waves-effect waves-light blue', 'id' => 'twitter')); ?>

            <?php echo $this->Html->link('Log In With Google+', '/users/login',
                array('class' => 'btn-large waves-effect waves-light red darken-1', 'id' => 'google')); ?>

            <?php echo $this->Html->link('Log In With Fitcentive', '/users/login',
                array('class' => 'btn-large waves-effect waves-light red lighten-2', 'id' => 'fitcentive')); ?>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

<p id="register">
    <?php echo $this->Html->link('I don\'t have an account yet, sign me up!', 'javascript:void(0);'); ?>
</p>