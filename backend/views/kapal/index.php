<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
//use kartik\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KapaltSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kapals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kapal-index">
<?php
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    //'columns' => $gridColumns,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kapal_id',
            'kapal_nama',
            'kapal_neg',

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
        <?= Html::a('Create Kapal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //'columns' => $gridColumns,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kapal_id',
            'kapal_nama',
            'kapal_neg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
