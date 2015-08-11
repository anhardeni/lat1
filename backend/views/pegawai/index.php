<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">
    <?php
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    //'columns' => $gridColumns,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip', 'nama', 'pangkatgol', 'jabatan',

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
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama',
            'pangkatgol',
            'jabatan',
            'unit',
            // 'status',
            // 'idkantor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
