<meta name="theme-color" content="#00a7c7">
<meta name="msapplication-navbutton-color" content="#00a7c7">
<meta name="apple-mobile-web-app-status-bar-style" content="#00a7c7">
<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">
<style>
    @font-face {
        font-family: 'ArunaFont';
        src: url('<?php echo base_url('assets/css/fonts/Aruna.eot') ?>'); /* IE9 Compat Modes */
        src: url('<?php echo base_url('assets/css/fonts/Aruna.eot?#iefix') ?>') format('embedded-opentype'), /* IE6-IE8 */
             url('<?php echo base_url('assets/css/fonts/Aruna.woff2') ?>') format('woff2'), /* Super Modern Browsers */
             url('<?php echo base_url('assets/css/fonts/Aruna.woff') ?>') format('woff'), /* Pretty Modern Browsers */
             url('<?php echo base_url('assets/css/fonts/Aruna.ttf') ?>') format('truetype'), /* Safari, Android, iOS */
             url('<?php echo base_url('assets/css/fonts/Aruna.svg#svgFontName') ?>') format('svg'); /* Legacy iOS */
    }

</style>
<?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
<link href="<?php echo base_url('assets/css/vendor/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/datatables.min.css');?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('assets/css/vendor/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/AdminLTE.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/theme.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/sweetalert.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/customalert.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/animate.min.css');?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/vendor/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/vendor/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/vendor/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
<!--<link href="<?php //echo base_url('assets/css/vendor/ladda-themeless.min.css'); ?>" rel="stylesheet" type="text/css" />-->
<link href="<?php echo base_url('assets/css/custom.css?v='.$this->config->item('version'));?>" rel="stylesheet" type="text/css">
<?php } else {?>
<link type="text/css" charset="utf-8" rel="stylesheet" media="all" href="<?php echo base_url('styles.php?ext=css&v='.$this->config->item('version'));?>" />
<?php }?>
