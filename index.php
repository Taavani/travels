<!doctype html>
<html <?php language_attributes(); ?> class="wide wow-animation">
<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Libre+Franklin:200,300,500,600,300italic">

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<?php do_action('get_header'); ?>

<?php echo \Roots\view(\Roots\app('sage.view'), \Roots\app('sage.data'))->render(); ?>

<?php do_action('get_footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
