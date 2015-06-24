

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<h3>Items | Periode php echo $_REQUEST['from']." - ".$_REQUEST['until'];?></h3>
<?php 

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'fixedHeader' => true,
    'headerOffset' => 40,
    'type' => 'striped',
    'dataProvider' => $dataReportItem,
    'responsiveTable' => true,
    'template' => "{items}",
        'columns'=>array(
            'kapal_id',
            'kapal_nama',
            'kapal_negara',
                     
           
        ),
    ));?>
<div align="left">
    <b>Printed By : echo Yii::app()->user->name;?><br/>
Printed At : echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; php echo date('Y'); ?> By Jsource</div>
</div>
