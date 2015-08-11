<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeksportirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teksportirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teksportir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teksportir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ideksp',
            'npwp',
            'nama',
            'alamat',
            'alamat1',
            // 'tel',
            // 'fax',
            // 'status',
            // 'tdafeksportir_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
