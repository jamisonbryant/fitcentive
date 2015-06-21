<!DOCTYPE html>

<html>
    <head>
        <!-- Metadata -->
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $this->fetch('title'); ?> - Fitcentive</title>

        <!-- Scripts -->
        <?php echo $this->Html->script('jquery/jquery.min'); ?>
        <?php echo $this->Html->script('materialize/materialize.min'); ?>

        <!-- Stylesheets -->
        <?php echo $this->Html->css('materialize/materialize.min'); ?>
        <?php echo $this->Html->css('front.min'); ?>
    </head>
    <body>
        <!-- Body -->
        <main id="body">
            <!-- Toast -->
            <?php
                if ($text = $this->Session->read('toast')) {
                    echo $this->element('toast', array('text' => $text));
                }
            ?>

            <!-- Logo -->
            <div id="logo">
                <?php echo $this->Html->image('logo.png'); ?>
            </div>

            <!-- Motto -->
            <div id="motto">
                <h1>Fitness at your fingertips.</h1>
            </div>

            <!-- Content -->
            <div class="container">
                <?php echo $this->fetch('content'); ?>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <?php echo $this->element('footer'); ?>
        </footer>
    </body>
</html>