<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TdafeksportirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tdafeksportirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdafeksportir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tdafeksportir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'periode',
            'peb',
            'tglpeb',
            'fasilitas',
            // 'jumlahpeb',
            // 'jumlahNP',
            // 'jumlahSanksi',
            // 'datecreated',
            // 'usercreated',
            // 'nipttd',
            // 'idteks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
