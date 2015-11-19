<head>
    <?php echo $this->Html->charset(); ?>
    <title>
    <?php echo $title_for_layout; ?>

    </title>
    <?php
    echo $this->Html->meta('icon');


    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-theme');
    echo $this->Html->css('bootstrap-theme.min');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('dataTables.bootstrap');
    echo $this->Html->css('font-awesome');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('main-style');
    echo $this->Html->css('morris-0.4.3.min');
    echo $this->Html->css('pace-theme-big-counter');
    echo $this->Html->css('social-buttons');
    echo $this->Html->css('style');
    echo $this->Html->css('timeline');

   

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');

    echo $this->Html->script('bootstrap');
    echo $this->Html->script('jquery-1.11.2');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('dashboard-demo');
    echo $this->Html->script('dataTables.bootstrap');
    echo $this->Html->script('excanvas.min');
    echo $this->Html->script('flot-demo');
    echo $this->Html->script('jquery.dataTables');
    echo $this->Html->script('jquery.flot');
    echo $this->Html->script('jquery.flot.pie');
    echo $this->Html->script('jquery.flot.resize');
    echo $this->Html->script('jquery.flot.tooltip.min');
    echo $this->Html->script('jquery.metisMenu');
    echo $this->Html->script('morris');
    echo $this->Html->script('morris-demo');
    echo $this->Html->script('npm');
    echo $this->Html->script('pace');
    echo $this->Html->script('siminta');
    echo $this->Html->script('raphael-2.1.0.min');
    ?>
</head>