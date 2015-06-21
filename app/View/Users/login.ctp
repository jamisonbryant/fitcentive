<?php $this->assign('title', 'Welcome'); ?>

<script>
    $(document).ready(function() {
        // Hide form
        $('#form').hide();

        $('#buttons a').on('click', function(e) {
            // Shrink logo
            $('#logo img').animate({ "margin-top": "-50px", "width": "25%" }, 500);

            // Shrink motto
            $('#motto h1').animate({ "font-size": "2rem" }, 500);

            // Hide buttons
            $('#buttons a:not(#' + $(this).attr('id') + ')').fadeOut(100, function() {
                $(this).remove();
            });

            $('#form').fadeIn(1000);

            e.preventDefault();
        });
    });
</script>


<style>
    #form {
        margin: 0 auto;
        width: 350px;
    }

    #form form {
        margin-bottom: 35px;
    }

    #buttons {
        text-align: center;
    }

    #buttons .btn-large:not(:last-of-type) {
        margin-right: 15px;
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
    <?php echo $this->Form->create('Goal', array('inputDefaults' => array('div' => false, 'label' => false))); ?>
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col input-field s12 m12 l12">
                        <?php echo $this->Form->input('email', array('id' => 'email', 'placeholder' => 'Your email')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col input-field s12 m12 l12">
                        <?php echo $this->Form->input('password', array('id' => 'password', 'placeholder' => 'Your password')); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

<!-- Login links -->
<div id="buttons">
    <?php echo $this->Html->link('Log In With Facebook', '/users/login/facebook',
        array('class' => 'btn-large waves-effect waves-light indigo darken-2', 'id' => 'facebook')); ?>

    <?php echo $this->Html->link('Log In With Twitter', '/users/login/twitter',
        array('class' => 'btn-large waves-effect waves-light blue', 'id' => 'twitter')); ?>

    <?php echo $this->Html->link('Log In With Google+', '/users/login/google',
        array('class' => 'btn-large waves-effect waves-light red darken-1', 'id' => 'google')); ?>

    <?php echo $this->Html->link('Log In With Fitcentive', '/users/login/fitcentive',
        array('class' => 'btn-large waves-effect waves-light red lighten-2', 'id' => 'fitcentive')); ?>
</div>

<!-- Register link -->
<p id="register">
    <?php echo $this->Html->link('I don\'t have an account yet, sign me up!', 'javascript:void(0);'); ?>
</p>