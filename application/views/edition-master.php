<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
$locale = 'hi';
$validLocale = \PhpOffice\PhpSpreadsheet\Settings::setLocale($locale);
if(isset($_REQUEST['tableData']))
{
	$FileName="Edition-Master-".date("F-j-Y").".xlsx";
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
    $spreadsheet = $reader->loadFromString($_REQUEST['tableData']);
    foreach(range('A','Z') as $columnID) {
        $spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    }
    $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
    header('Content-Type: application/application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="'.$FileName.'"');
    $writer->save("php://output");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Circulation | Edition Master</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
    <?php $this->load->view('inc/styles.php');
          $this->load->view('inc/alerts');?>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <?php $this->load->view('inc/header'); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <?php $this->load->view('inc/left-side-menu'); ?>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Edition Master</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url('Dashboard');?> ">
                            <i class="fa fa-dashboard"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">Masters</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?php include_once('inc/alerts.php'); ?>
                <div class="box">
                    <div class="box-body table-responsive">
                        <?php echo form_open_multipart('Masters/CreateEditionMaster','name="Edition_form" id="Residence_form" onsubmit="return CIRCULATION.utils.formValidation(this);" '); ?>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <label>Code</label>
                            <input autocomplete="off" type="text" class="form-control" value="<?php echo $edt_code; ?>" readonly/>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                <label>Edition Name</label>
                            <input autocomplete="off" required type="text" class="form-control isAlpha" id="edition_name" name="edition_name" />
                            </div>            

                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">     
                                <label>&nbsp;</label>                           
                                <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add</button>
                            </div>    
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <label>&nbsp;</label>
                            <button onclick="window.location='<?php echo base_url('Dashboard');?>'" class="btn btn-block btn-danger" type="button"><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Close</button>
                        </div>                       
                        <?php echo form_close();?>
                        <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</span>
                     </div>
                </div>

                <!--Edition Records-->
                <div class="box">
                    <!--<div class="box-header">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="input-group">
                                <select class="form-control" id="issue-product">
                                    <option value="">Select Product</option>
                                    <?php //foreach($product_list as $p) { ?>
                                    <option <?php //echo (isset($_GET['p']) && $_GET['p'] == $p->product_code) ? "selected" : ""; ?> value="<?php //echo $p->product_code; ?>"><?php //echo $p->product_name; ?></option>
                                    <?php //} ?>
                                </select>
                                <div class="input-group-addon btn" style="background: #00a7c7;color: #FFF!important;" id="search-issue"><i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="box-body table-responsive">
                        <table class="table table-results"  id="edition-table" style="width:100%;">
                            <thead>
                                <tr>
                                    <td style="background:#cfcdcd; color:#000000; font-weight:bold; border:1px solid #ecf0f5;"> #</td>
                                    <td style="background:#cfcdcd; color:#000000; font-weight:bold; border:1px solid #ecf0f5;">Name</td>
                                    <td style="background:#cfcdcd; color:#000000; font-weight:bold; border:1px solid #ecf0f5;">Priority</td>
                                    <td style="background:#cfcdcd; color:#000000; font-weight:bold; border:1px solid #ecf0f5;">Status</td>
                                    <td style="background:#cfcdcd; color:#000000; font-weight:bold; border:1px solid #ecf0f5;" class="remove_on_excel"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($edit_lists)) {
                                $i=1;
                                foreach($edit_lists as $ed) { ?>
                                <tr data-save="false" data-edtcode="<?php echo $ed->edition_code; ?>">
                                    
                                    <td ><?php echo $i++; ?></td>
                                    <td class="edt-name"><?php echo $ed->edition_name; ?></td>
                                    <td align="center" class="handle"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></td>
                                    <td class="edt-status"><?php if($ed->cancel_flag == ResidenceStatus::Active){echo "Active"; } else{echo "Disable";}?> </td>
                                                                           
                                    <td class="remove_on_excel" align="center">
                                        <button data-id="<?php echo $ed->edition_code; ?>" data-product="<?php //echo $i->issue_product_code; ?>" class="btn btn-primary edition-edit-btn"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <?php //if($i->cancel_flag == 0){?>
                                        <!--<button data-id="<?php //echo $i->res_code; ?>" data-product="<?php //echo $i->issue_product_code; ?>" class="btn btn-danger res-delete-btn"><i class="fa fa-trash-o" aria-hidden="true"></i></button>-->
                                       <?php //} ?>
                                    </td>
                                </tr>
                                <?php }
                                } 
                                else {
                                   echo "<tr><td colspan='5' class='no-records'><i class='fa fa-exclamation-circle' aria-hidden='true'></i> No Records Found!</td></tr>";   
                                }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <label>&nbsp;</label>
                            <button class="btn btn-block btn-warning" type="button" onclick="CIRCULATION.utils.exportExcel(null, null, null, null, false, true);"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;Excel</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <label>&nbsp;</label>
                            <button onclick="window.location='<?php echo base_url('Dashboard');?>'" class="btn btn-block btn-danger" type="button"><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Close</button>
                        </div>
                    </div>
                </div>
                
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       <?php 
        $this->load->view('inc/footer');
        $this->load->view('inc/help');     
        ?>
    </div>
    <!-- ./wrapper -->
    <script>
        var page = 'EDITION-MASTER';
    </script>
    <?php $this->load->view('inc/scripts'); ?>
    <?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
    <script src="<?php echo base_url('assets/js/masters.js?v='.$this->config->item('version')); ?>"></script>
    <script src="<?php echo base_url('assets/js/build-docs.js?v='.$this->config->item('version')); ?>"></script>
    <?php }?>
</body>
</html>
