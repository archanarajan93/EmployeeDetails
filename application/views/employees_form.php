
<!DOCTYPE html>
<html>
<head>
   
   <style>
   .haserror{
   background-color : #fa7c7c;
   }
   .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background: #2A3F54 !important;
}

.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
    background-color: #222d32;
}
.wrapper {
    min-height: 100%;
    position: static;
    overflow: hidden;
}
.content-wrapper, .right-side {
    min-height: 100%;
    background-color: #ecf0f5;
    z-index: 800;
}
.content {
    min-height: 250px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}

.table-responsive {
    min-height: .01%;
    overflow-x: auto;
}
 .form-control {
    font-size: 12px !important;
}
.form-control {
    color: #73879C;
    border: 1px solid #ccc !important;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s !important;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s !important;
}
.form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
  
   </style>
    <?php $this->load->view('inc/styles.php');
          $this->load->view('inc/alerts');?>
</head>
<body class="hold-transition skin-blue  sidebar-collapse">
 <div class="content-wrapper">
     <section class="content-header">
                <h1>STUDENT GENERAL DETAILS</h1>
            </section>
    <section class="content">
        <div class="box">
            <div class="box-body table-responsive">
                <form method="post" action=" <?php echo base_url('AuthController/CreateEmployeesForm'); ?>" id="employee_form">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin: 7px 0;">
                            <label>Employee Code : </label>
                        </div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                         <input type="text" id="emp_code" readonly class="form-control" name="emp_code" value="<?php echo $empl_code; ?>" placeholder="" />
                     </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin: 7px 0;">
                            <label>Employee Name : </label>
                        </div>
                     <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                         <input type="text" id="emp_name" class="form-control" name="emp_name" value="" placeholder="" />
                     </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin: 7px 0;">
                            <label>Department : </label>
                        </div>
                     <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                     <select id="dpt" class="form-control" name="dpt" value="">
                     <option>IT</option>
                     <option>ACCOUNTS</option>
                     <option>FRONT OFFICE</option>
                     <option>PRODUCTION</option>
                     <option>HUMAN RESOURCE DEPARTMENT</option>
                     <option>SOFTWARE DEPARTMENT</option>
                     <option>MARKETING</option>
                     <option>SYSTEMS DEPARTMENT</option>
                     </select>
                         
                     </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="margin: 7px 0;">
                            <label>Age : </label>
                        </div>
                     <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                         <input type="text" id="age" class="form-control" onkeypress="return isNumberKey(event)" name="age" value="" placeholder="" />
                     </div>
                    </div>
                    
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 7px 0;">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <label>Experienced in organization : </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                            <input type="text" id="exp" style="color: #000;font-weight: bold;" class="form-control" onkeypress="return isNumberKey(event)" name="exp" value="" placeholder="Years" />
                        </div>
                    </div>
                    <span class="col-lg-2 col-md-2 col-sm-6 col-xs-6" style="margin-left: 258px;">
                        <label>&nbsp;</label>
                        <button class="btn btn-block btn-primary add-btn" type="submit" name="save" id="save">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                        </button>
                    </span>
                            
                    

                </form>
                </div>
             </div>
             <div class="box">
                        <div id="append_records" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                            <table width="100%" class="table table-results " id="employee_tbl">
                                <thead>
                                  <tr>
                                      <td align="center" width="5%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Slno</td>
                                      <td align="center" width="15%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Employee Name</td>
                                      <td align="center" width="20%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Employee Id</td>
                                      <td align="center" width="20%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Department</td>
                                      <td align="center" width="20%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Experience of year</td>
                                      <td align="center" width="20%" style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">Age</td>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $sl=1;
                                      if(count($empl_rec) > 0){
                                          foreach($empl_rec as $emp){
                                ?>
                                    <tr>
                                        <td align="center"><?php echo $sl++; ?></td>
                                        <td align="center"><?php echo $emp->employee_name;?></td>
                                        <td align="center"><?php echo $emp->employee_code;?></td>
                                        <td align="center"><?php echo $emp->employee_dpt;?></td>
                                        <td align="center"><?php echo $emp->employee_experience;?></td>
                                        <td align="center"><?php echo $emp->employee_age;?></td>
                                    </tr>
                                    <?php }
                                      }else{ ?>
                                  <tr class='no-records'><td colspan='6'><b><i class="fa fa-exclamation-circle" aria-hidden="true"></i> No Recotds found!</b></td></tr>          
                                <?php } ?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
</div>
        <script>
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                } else {
                    return true;
                    alert("Please digit only")
                }
            }
           
                $(document).ready(function() {
    $('#employee_tbl').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );

</script>
       <?php $this->load->view('inc/scripts.php');?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </body>
</html>
