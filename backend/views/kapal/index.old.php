<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;




$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
    'kapal_id',
    'kapal_nama',
    'kapal_neg',
    [
        'attribute'=>'Kapal',
        'label'=>'Kapal',
        'vAlign'=>'middle',
        'width'=>'190px',
        'value'=>function ($model, $key, $index, $widget) { 
            return Html::a($model->Kapal, '#', []);
        },
        'format'=>'raw'
    ],
             'kapal_id',
            'kapal_nama',
            'kapal_neg',
    
];
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KapaltSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Kapals';
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="kapal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <p>
        <?= Html::a('Create Kapal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    
    form method="post">
            <table>
                <tr>
                    <td>Date From</td>
                    <td>Date To</td>
                </tr>
                <tr>
                    <td><input type="integer" name="from" value="$_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" /></td>
                    <td><input type="integer" name="until" value="$_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" /></td>
                </tr>
            </table>
        <input type="submit" value="Report to Excel" name="'ExcelReport'">
        <input type="submit" value="Report to Pdf" name="'PdfReport'">
        </form>
   
        <h1>Kapal</h1>

<?= ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'fontAwesome' => true,
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-default'
    ]
]) ;?>

<hr>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'export' => [
        'fontAwesome' => true,
    ]
]); ?>

</div>
