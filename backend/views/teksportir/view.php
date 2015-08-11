<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Teksportir */

$this->title = $model->ideksp;
$this->params['breadcrumbs'][] = ['label' => 'Teksportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teksportir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ideksp' => $model->ideksp, 'tdafeksportir_id' => $model->tdafeksportir_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ideksp' => $model->ideksp, 'tdafeksportir_id' => $model->tdafeksportir_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ideksp',
            'npwp',
            'nama',
            'alamat',
            'alamat1',
            'tel',
            'fax',
            'status',
            'tdafeksportir_id',
        ],
    ]) ?>

</div>
