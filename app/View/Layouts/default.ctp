<!DOCTYPE html>

<html>
    <head>
        <!-- Metadata -->
        <?php echo $this->Html->charset(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title><?php echo $this->fetch('title'); ?> - Park-n-Band</title>

        <!-- Scripts -->
        <?php echo $this->Html->script('jquery/jquery.min'); ?>
        <?php echo $this->Html->script('materialize/materialize.min'); ?>

        <!-- Stylesheets -->
        <?php echo $this->Html->css('materialize/materialize.min'); ?>
        <?php echo $this->Html->css('default'); ?>
    </head>
    <body>
        <!-- Sidebar -->
        <aside id="sidebar">
            <?php echo $this->element('sidebar'); ?>
        </aside>

        <!-- Header -->
        <header>
            <?php echo $this->element('header'); ?>
        </header>

        <!-- Preloader -->
        <?php if (isset($preloader) && $preloader === true) echo $this->element('preloader'); ?>

        <!-- Body -->
        <main id="body">
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