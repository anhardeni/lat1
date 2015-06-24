<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use kartik\daterange\DateRangePicker;
use kartik\widgets\ActiveForm;


$form = ActiveForm::begin();
 
// DateRangePicker in a dropdown format (uneditable/hidden input) and uses the preset dropdown.
echo '<label class="control-label">Date Range</label>';
echo '<div class="drp-container">';
echo DateRangePicker::widget([
    'name'=>'date_range_2',
    'presetDropdown'=>true,
    'hideInput'=>true
]);

echo DateRangePicker::widget([
    'name'=>'date_range_1',
    'value'=>'01-Jan-14 to 20-Feb-14',
    'convertFormat'=>true,
    'useWithAddon'=>true,
    'pluginOptions'=>[
        'format'=>'d-M-y',
        'separator'=>' to ',
        'opens'=>'left'
    ]
]);

ActiveForm::end();
$this->title = 'Pts';
$this->params['breadcrumbs'][] = $this->title;
//$this->title = $model->company_id;

echo Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> Cetak Pdf', ['/pt/mpdf-demo-1'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
    ]);
    
echo Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> Cetak demo2','id' , ['/pt/mpdf-demo-2'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
    ]);
   

?>
;

<div class="pt-index">
    

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'company_id',
            'company_name',
            'company_email:email',
                        [
                        'label'=>'cetak LHPK',
                        'format' => 'raw',
                        'value'=>function ($data) {
                        return Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> Cetak demo2','/sapp/backend/web/index.php?r=pt%2Fmpdf-demo-2');
                      //  return Html::a('Cetak demo2', ['MpdfDemo1', 'id' => $model->company_id]);
                         },
                        ],
            //'company_address',
            'logo',
            // 'company_start',
            [
            'attribute' => 'company_start',
                'value' => 'company_start',
                'format' => 'raw',
                'filter' => DateRangePicker::widget([
    'name'=>'company_start',
 
    'convertFormat'=>true,
    'useWithAddon'=>true,
    'pluginOptions'=>[
        'format'=>'yyyy-mm-dd',
        'separator'=>' to ',
        'opens'=>'left'
    ]
])
                
                
            ],
            
            // 'company_created_date',
            // 'company_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
echo '<label class="control-label">Date Range</label>';
echo '<div class="drp-container">';

echo '</div>';
</div>
