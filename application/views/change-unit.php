<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Circulation | Change Unit</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php $this->load->view('inc/styles');?>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
  <script>var page = '';</script>
  <header class="main-header">
      <?php //globals    
      $color_codes  = array("#FFD600","#0266C8","#F90101","#F2B50F","#00933B","#F44336","#E91E63","#9C27B0","#D50000","#AA00FF","#C51162","#3F51B5","#8BC34A","#FF9800","#01579B","#FFC400","#795548","#33691E","#0091EA","#004D40","#827717","#EF6C00","#546E7A","#CDDC39","#7E57C2");
      $color_length = sizeof($color_codes);
      $no_img_index = $this->user->user_id < $color_length ? $this->user->user_id : ($this->user->user_id % $color_length);
      $first_letter = strtoupper(substr($this->user->user_name,0,1));
      $smallPhotoHtml = '<span class="img-sm img-circle img-bordered" style="position:relative;line-height:1.42857143;background-color:'.$color_codes[$no_img_index].'; margin-right:5px;margin-top: -2px;"><b class="round-text-md-top">'.$first_letter.'</b></span>';
      $photoHtml = '<span style="margin: 15px 0;" class="col-md-12"><b class="img-circle img-bordered round-text-xl-top" style="background-color:'.$color_codes[$no_img_index].'">'.$first_letter.'</b></span>';
      ?> 
      <a href="#" class="logo hidden-xs">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="<?php echo base_url('assets/imgs/logo_icon.png'); ?>" alt="logo" style="max-width: 25px;"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?php echo base_url('assets/imgs/logo.png'); ?>" alt="logo" class="img-responsive" ></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">  
        <div class="miniheader visible-xs" style="margin: 0;"><img src="<?php echo base_url('assets/imgs/logo.png'); ?>" alt="logo" class="img-responsive"></div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">                                                                       
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">              
                  <?php echo $smallPhotoHtml; $prod = isset($this->user->user_product_code) ? ' - '.$this->user->user_product_code : ""; ?>
                <span class="hidden-xs" style="margin-top: 2px;float: right;"><?php echo $this->user->user_name." - ".$this->user->user_unit_code.$prod; ?> &nbsp;<i class="fa fa-cogs" aria-hidden="true"></i></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <?php echo $photoHtml; ?>                
                  <p><?php echo $this->user->user_name." - ".$this->user->user_unit_code.$prod; ?></p>
                </li>              
                <!-- Menu Footer-->
                <li class="user-footer">                
                  <div class="pull-right">
                    <a onclick="CIRCULATION.utils.userLogout()" class="btn btn-default btn-flat link">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>&nbsp;</li>
          </ul>
        </div>
      </nav>
  </header>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin: 0;"> 
    <style>.progress-description {margin: 11px 0 0 0 !important;font-size: 9px !important;} .main-footer{margin-left:0!important;}</style>
    <!-- Main content -->
    <section class="content"> 
        <?php foreach($units as $u) { ?>
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
              <a href="javascript:void(0);" class="select-unit" data-unit="<?php echo $u->unit_code; ?>">
                  <div class="info-box" style="color:#FFF;background-color:#00a7c7;">
                      <span class="info-box-icon"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></span>
                      <div class="info-box-content">
                          <h4 style="font-size: 15px;"><b><?php echo $u->unit_name; ?></b></h4>
                          <div class="progress"><div class="progress-bar" style="width: 95%;"></div></div>
                          <span class="progress-description"><?php echo $u->unit_code; ?> UNIT</span>
                      </div>
                  </div>
              </a>
         </div>
        <?php } ?>                                      
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper --> 
  <?php $this->load->view('inc/footer');?>
  <div class="control-sidebar-bg"></div>
</div> 
<form method="post" id="user-unit-form" action="<?php echo base_url('Tools/UpdateUnit'); ?>">
<input type="hidden" id="user-unit" name="user-unit" value="" />
</form>
<script>var page = 'CHANGE-UNIT';</script>
<?php $this->load->view('inc/scripts'); ?>
<?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
<script src="<?php echo base_url('assets/js/tools.js?v='.$this->config->item('version')); ?>"></script>
<?php }?>
</body>
</html>