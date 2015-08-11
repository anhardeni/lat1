<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
use kartik\daterange\DateRangePicker;
//use kartik\date\DatePicker;
//use dosamigos\datepicker\DateRangePicker;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TmasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LHPSP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmaster-index">
<?php
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    //'columns' => $gridColumns,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             'nolphsp',
            'tgllhpsp',
            'idkapal0.kapal_nama',
             'voy',
             'idpeltujuan',
         

            ['class' => 'yii\grid\ActionColumn'],
        ],
        
    'fontAwesome' => true,
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-default'
    ]
])
?>


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
     
         <?= Html::button('Create LHPSP', ['value'=>Url::to(['tmaster/create']), 'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>
    
<?php
	Modal::begin([
            'header'=>'<h4>LHPSP</h4>',
            'id'=>'modal',
            'size'=>'modal-lg',
            
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();

?>
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
      
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'nolphsp',
                      /*
                            [
                            'attribute'=>'tgllhpsp',
                            'value'=>'tgllhpsp',
                            'format'=> 'raw',
                            'filter'=>DatePicker::widget(
                                    [
                                        'model'=> $searchModel,
                                        'attribute'=>'tgllhpsp',
                                        'clientOptions'=>[
                                            'autoclose'=> TRUE,
                                            'format'=> 'yyyy-mm-d'
                                        ]
                                    ])
                        ],
      
                      
            */
            
                            [
                            'attribute'=>'tgllhpsp',
                            'value'=>'tgllhpsp',
                            'format'=> 'raw',
                            'filter'=>  DateRangePicker::widget([
                                'model'=>$searchModel,
                                'attribute'=>'tgllhpsp',
                                'convertFormat'=>true,
                               
                                'pluginOptions'=>[
                                    'timePicker'=>true,
                                    'timePickerIncrement'=>30,
                                    'separator'=> ' TO ', 
                                    'format'=>'Y-m-d '
                                                ],
                                
                                  'pluginEvents'=>[
                                    "apply.daterangepicker"=>"function() {apply_filter('tgllhpsp')}",
                            
                                   
                                                ]
                            ])
                                                            ],

           // 'idkapal',
             //   'idkapal0.kapal_nama' , 
            [
            'attribute'=>'idkapal',
            'value'=>'idkapal0.kapal_nama',
           ],       
            'voy',
            // 'idagen',
            // 'idpelasal',
            // 'tglpeldatang',
            // 'idpeltujuan',
            // 'tglpeltujuan',
            // 'jenisdokumen',
            // 'jenisbarang',
            // 'berat',
            // 'satuan',
            // 'jumlahkemasan',
            // 'volume',
            // 'idchecking',
            // 'bc11',
            // 'tglbc11',
            // 'daftarbekal',
            // 'bc12',
            // 'tglbc12',
            // 'bc13',
            // 'tglbc13',
            // 'lhpsp',
            // 'nippemeriksa',
            // 'nipatasan1',
            // 'nipatasan2',
            // 'datecreated',
            // 'usercreated',
            // 'idkantor',
            
             ['class' => 'yii\grid\ActionColumn',
                'template' => '{cetak}',
                'buttons' => [
                    'cetak' => function($url, $model){
                   return  Html::a('CETAK LHPSP', ['cetak-word','id'=>$model->id], ['class'=>'btn btn-warning']);
                    }
                ]
                ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

