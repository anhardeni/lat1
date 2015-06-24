<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kapal */

$this->title = $model->kapal_id;
$this->params['breadcrumbs'][] = ['label' => 'Kapals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kapal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kapal_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kapal_id], [
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
            'kapal_id',
            'kapal_nama',
            'kapal_neg',
        ],
    ]) ?>

</div>
