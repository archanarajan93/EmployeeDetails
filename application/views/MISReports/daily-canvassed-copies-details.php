<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
if(isset($_REQUEST['tableData']))
{
    $FileName="Daily-Canvassed-Copies-Details-".date("F-j-Y").".xlsx";
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
    $spreadsheet = $reader->loadFromString($_REQUEST['tableData']);
    //$spreadsheet->getActiveSheet()->setTitle("123");
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
    <title>Circulation | Daily Canvassed Copies Details</title>
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
                <h1>Daily Canvassed Copies Details</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url('Dashboard');?> ">
                            <i class="fa fa-dashboard"></i>
                            Home
                        </a>
                    </li>
                    <li>MIS Reports</li>
                    <li class="active">Daily Canvassed Copies Details</li>                    
                </ol>
            </section>            
            <!-- Main content -->
            <section class="content">            
                <div class="box">                    
                    <div class="box-body table-responsive">
                        <table width="100%" class="table table-results">
                          <thead>
                            <tr>
                              <td colspan="14" style="background-color: #e7f2f4; font-weight: bold; color:#000000;"><strong>Daily Canvassed Copies From 01-Jul-2019 To 08-Jul-2019 | Date Type: CANVASSED | Report Type: Unitwise | Copy Types: GURUDEEPAM, BBS 1 YEAR 2000</strong></td>
                            </tr>
                            <tr>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>SlNo</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Sale Type</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Code </strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Agent Name</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Location</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Phone</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;" align="right"><strong>Copies</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Subscriber Code</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Subscriber    Name </strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Address</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Phone</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Unit</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Region</strong></td>
                              <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Promoter</strong></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td><strong>THIRUVANANTHAPURAM</strong></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>BUREAU</td>
                              <td>T0125</td>
                              <td>SURESH BABU K</td>
                              <td>KAIKARA</td>
                              <td>0470 - 2606218     9048578979</td>
                              <td align="right">1</td>
                              <td>STVM000025057</td>
                              <td>SARVADHAMANAN</td>
                              <td>ADIYANVILAKAM</td>
                              <td>9946227235</td>
                              <td>TVM</td>
                              <td>TRIVANDRUM - CHIRAYINKEEZHU</td>
                              <td>22. ATTINGAL  DEEPAK    RAJENDRAN PH:9895126108</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>T1016</td>
                              <td>RAJANI S</td>
                              <td>PULIYOOR</td>
                              <td>2841579  2840162  9745773538</td>
                              <td align="right">1</td>
                              <td>STVM000092173</td>
                              <td>ADARSH</td>
                              <td>A S BHAVAN</td>
                              <td>8943381003</td>
                              <td>TVM</td>
                              <td>TRIVANDRUM - NEDUMANGADU</td>
                              <td>14. PALODE     (BHUVANENDRAN C I) PH:9048624832</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>BUREAU</td>
                              <td>T2612</td>
                              <td>VIPIN</td>
                              <td>KAREECHIRA KADAKKAVOOR</td>
                              <td>9497565686</td>
                              <td align="right">1</td>
                              <td>STVM000081966</td>
                              <td>VIGNESH THAMPI</td>
                              <td>MUNGOTTU VAYAL VEEDU</td>
                              <td>9539479018</td>
                              <td>TVM</td>
                              <td>TRIVANDRUM - CHIRAYINKEEZHU</td>
                              <td>22. ATTINGAL  DEEPAK    RAJENDRAN PH:9895126108</td>
                            </tr>
                            <tr>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"><strong>Total</strong></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000;font-weight:bold;" align="right">3</td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><strong>KOLLAM</strong></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>BUREAU</td>
                              <td>Q0036</td>
                              <td>RAVINDRAN N</td>
                              <td>KARINGANNOOR</td>
                              <td>0474 2467516</td>
                              <td align="right">1</td>
                              <td>SQLN000054951</td>
                              <td>JAYAPRAKASH</td>
                              <td>J.S.BHAVAN</td>
                              <td>9496104161</td>
                              <td>QLN</td>
                              <td>KOLLAM - KOTTAKKARA</td>
                              <td>11 POOYAPPALLY      (********)</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>Q0981</td>
                              <td>BEENA J</td>
                              <td>ANCHAL TOWN</td>
                              <td>0475 2927042,9037372416</td>
                              <td align="right">1</td>
                              <td>SQLN000054887</td>
                              <td>KOCHUKRISHNAN</td>
                              <td>KRISHNA BHAVAN</td>
                              <td>9495500745</td>
                              <td>QLN</td>
                              <td>KOLLAM - KOTTAKKARA</td>
                              <td>12 ANCHAL  (********)</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>BUREAU</td>
                              <td>Q1622</td>
                              <td>ANILKUMAR B</td>
                              <td>NILAMEL</td>
                              <td>9446965329</td>
                              <td align="right">1</td>
                              <td>SQLN000054832</td>
                              <td>VASANTHA</td>
                              <td>CHARUVILA VEEDU</td>
                              <td>9567496463</td>
                              <td>QLN</td>
                              <td>KOLLAM - KOTTAKKARA</td>
                              <td>15 KADAKKAL (SREEKUMAR)9946108287</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>Q2081</td>
                              <td>SARATHCHANDRA PRASAD M</td>
                              <td>EZHAVAPALAM</td>
                              <td>9544427537</td>
                              <td align="right">1</td>
                              <td>SQLN000020880</td>
                              <td>ARUN</td>
                              <td>ARUN NIVAS</td>
                              <td>9645082428</td>
                              <td>QLN</td>
                              <td>KOLLAM - CITY</td>
                              <td>01 KOLLAM TOWN     (SIDHARTHAN -CRE) PH: 9495422995  </td>
                            </tr>
                            <tr>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"><strong>Total</strong></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000;font-weight:bold;" align="right">3</td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><strong>ALAPUZHA</strong></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>A0839</td>
                              <td>MADHU P R</td>
                              <td>SWAYAMPRABHA JN.</td>
                              <td>0478 2863481,9947571790</td>
                              <td align="right">1</td>
                              <td>SALP000020562</td>
                              <td>GOPI</td>
                              <td>DEVASWAM VELI</td>
                              <td>9249721850</td>
                              <td>ALP</td>
                              <td>ALAPPUZHA - CHERTHALA</td>
                              <td>03. MUHAMMA (LAILA L - ACM ) PH: 9656750147</td>
                            </tr>
                            <tr>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"><strong>Total</strong></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000;font-weight:bold;" align="right">3</td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><strong>KOTTAYAM</strong></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>SALES</td>
                              <td>K0158</td>
                              <td>RAJASEKHARAN.P</td>
                              <td>KOTHALA</td>
                              <td>2701383,8606675796</td>
                              <td align="right">2</td>
                              <td>DEFK0158</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>KTM</td>
                              <td>KOTTAYAM - CITY</td>
                              <td>08 PAMPADY RAMESH(9446984928)</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>SALES</td>
                              <td>K1311</td>
                              <td>VIJAYAN.V.M</td>
                              <td>MANGANAM SCHOOL JN</td>
                              <td>9895197221</td>
                              <td align="right">2</td>
                              <td>DEFK1311</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>KTM</td>
                              <td>KOTTAYAM - CITY</td>
                              <td>12 KOTTAYAM CITY - RONY T THOMAS (ACM) 9539007828</td>
                            </tr>
                            <tr>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"><strong>Total</strong></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000;font-weight:bold;" align="right">3</td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                              <td style="color:#ff0000"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><strong>TRISSUR</strong></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td align="right"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>SALES</td>
                              <td>TR006</td>
                              <td>SUGATHAN.V.K</td>
                              <td>IRINJALAKKUDA</td>
                              <td>2822338, 9961845949</td>
                              <td align="right">2</td>
                              <td>DEFTR006</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>IRINJALAKUDA (SHIBU.T.R)9946108279</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1016</td>
                              <td>UNNIKRISHNAN.C.M</td>
                              <td>AANURULI</td>
                              <td>9544037179</td>
                              <td align="right">1</td>
                              <td>STSR000011186</td>
                              <td>PRATHUMNAN</td>
                              <td>KIZHIKOODAN H</td>
                              <td>9562292446</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>IRINJALAKUDA (SHIBU.T.R)9946108279</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>INTERNAL WORK (IW)</td>
                              <td>TR1016</td>
                              <td>UNNIKRISHNAN.C.M</td>
                              <td>AANURULI</td>
                              <td>9544037179</td>
                              <td align="right">1</td>
                              <td>STSR000011222</td>
                              <td>PURUSHOTHAMAN.C.J</td>
                              <td>CHILLIKKARA H</td>
                              <td>9446520840</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>IRINJALAKUDA (SHIBU.T.R)9946108279</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1035</td>
                              <td>BABU.C.K</td>
                              <td>KOODAPUZHA</td>
                              <td>9895316721</td>
                              <td align="right">1</td>
                              <td>STSR000010787</td>
                              <td>SUKESH</td>
                              <td>KUNNIPILLISSERY H</td>
                              <td>9446144423</td>
                              <td>TSR</td>
                              <td>THRISSUR- EAST</td>
                              <td>CHALAKUDY (MOHANAN.P.R -CRE) PH: 9447528130</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1064</td>
                              <td>VISHNU.P.SURESH</td>
                              <td>PADAKULAM</td>
                              <td>9744911660</td>
                              <td align="right">1</td>
                              <td>STSR000010957</td>
                              <td>VISWAN</td>
                              <td>KOTTEKAD H</td>
                              <td>7034142840</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>KODUNGALLUR (THEJUS) 7356876918</td>
                            </tr>
                            <tr>
                              <td>16</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1096</td>
                              <td>GOPI.K.V</td>
                              <td>NARAYANAMANGALAM</td>
                              <td>8086248986</td>
                              <td align="right">1</td>
                              <td>STSR000005818</td>
                              <td>SHAJI</td>
                              <td>RAJA &amp; RAJA TIMBERS</td>
                              <td>0480 2809611</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>KODUNGALLUR (THEJUS) 7356876918</td>
                            </tr>
                            <tr>
                              <td>17</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1239</td>
                              <td>JAISON</td>
                              <td>PARIYARAM</td>
                              <td>9447408269</td>
                              <td align="right">1</td>
                              <td>STSR000009654</td>
                              <td>CHANDRAN, EENAMPILLY H</td>
                              <td>ELINJIPRA.P.O</td>
                              <td>7525500365</td>
                              <td>TSR</td>
                              <td>THRISSUR- EAST</td>
                              <td>CHALAKUDY (MOHANAN.P.R -CRE) PH: 9447528130</td>
                            </tr>
                            <tr>
                              <td>18</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR1239</td>
                              <td>JAISON</td>
                              <td>PARIYARAM</td>
                              <td>9447408269</td>
                              <td align="right">1</td>
                              <td>STSR000010841</td>
                              <td>SAJEEVAN</td>
                              <td>VATTAPARMABIL H</td>
                              <td>9847146578</td>
                              <td>TSR</td>
                              <td>THRISSUR- EAST</td>
                              <td>CHALAKUDY (MOHANAN.P.R -CRE) PH: 9447528130</td>
                            </tr>
                            <tr>
                              <td>19</td>
                              <td>BUREAU</td>
                              <td>TR1265</td>
                              <td>PRASAD.C.S</td>
                              <td>CHAPPARA VALAVU</td>
                              <td>9847769002</td>
                              <td align="right">1</td>
                              <td>STSR000012579</td>
                              <td>SAHAJAN</td>
                              <td>EREZHATH</td>
                              <td>9400612593</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>KODUNGALLUR (THEJUS) 7356876918</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR181</td>
                              <td>PAUL A P</td>
                              <td>KORATTY</td>
                              <td>9495783116</td>
                              <td align="right">1</td>
                              <td>STSR000009654</td>
                              <td>CHANDRAN, EENAMPILLY H</td>
                              <td>ELINJIPRA.P.O</td>
                              <td>7525500365</td>
                              <td>TSR</td>
                              <td>THRISSUR- EAST</td>
                              <td>CHALAKUDY (MOHANAN.P.R -CRE) PH: 9447528130</td>
                            </tr>
                            <tr>
                              <td>21</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR640</td>
                              <td>DEVASSY.P.D</td>
                              <td>CHIRANGARA</td>
                              <td>2733590, 9446721386</td>
                              <td align="right">1</td>
                              <td>STSR000009522</td>
                              <td>PEETHAMBARAN K.K</td>
                              <td>KAINIKKARA H</td>
                              <td>9633507486</td>
                              <td>TSR</td>
                              <td>THRISSUR- EAST</td>
                              <td>CHALAKUDY (MOHANAN.P.R -CRE) PH: 9447528130</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>GURUDEEPAM SALES</td>
                              <td>TR849</td>
                              <td>RAJU</td>
                              <td>ERIYAD</td>
                              <td>9846104258, 2813576</td>
                              <td align="right">1</td>
                              <td>STSR000012568</td>
                              <td>BEERAS</td>
                              <td>PETTIKADA</td>
                              <td>9061110748</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>KODUNGALLUR (THEJUS) 7356876918</td>
                            </tr>
                            <tr>
                              <td>23</td>
                              <td>FREE</td>
                              <td>TR911</td>
                              <td>MODISH.P.M</td>
                              <td>CHIRAKKAL</td>
                              <td>9562741902</td>
                              <td align="right">1</td>
                              <td>STSR000001584</td>
                              <td>RAVEENDRANATH</td>
                              <td>EAZHUVAPARAMBIL H</td>
                              <td>9447284522</td>
                              <td>TSR</td>
                              <td>TRISSUR- WEST</td>
                              <td>THRIPRAYAR (SURESHBABU K K - CI) Ph.9946181429</td>
                            </tr>
                            <tr>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000"><strong>Total</strong></td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000;font-weight:bold;" align="right">10</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                              <td style="color:#ff0000">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>                            
                          </tbody>
                          <tfoot>
                             <tr>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;"><strong>Grand Total</strong></td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;" align="right">16</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                                 <td style="background-color: #cfcdcd; font-weight: bold; color:#000000;border:1px solid #ecf0f5;">&nbsp;</td>
                             </tr>
                          </tfoot>
                        </table>                                                                                          
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <label>&nbsp;</label>
                            <button class="btn btn-block btn-warning" type="button" onclick="CIRCULATION.utils.exportExcel(null, null, null, null, false, true);"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;Excel</button>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                            <label>&nbsp;</label>
                            <button onclick="window.close()" class="btn btn-block btn-danger" type="button"><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Close</button>
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
        var page = 'DAILY-CANVAS-COPY';
    </script>
    <?php $this->load->view('inc/scripts'); ?>
    <?php if(ENVIRONMENT == 'development' || ENVIRONMENT == 'livedebug'){?>
    <script src="<?php echo base_url('assets/js/mis-reports.js?v='.$this->config->item('version')); ?>"></script>    
    <?php }?>
</body>
</html>