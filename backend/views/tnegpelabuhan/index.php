<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TnegpelabuhanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tnegpelabuhans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnegpelabuhan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tnegpelabuhan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpel',
            'negarapelabuhan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
