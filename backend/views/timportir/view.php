<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Timportir */

$this->title = $model->idtimp;
$this->params['breadcrumbs'][] = ['label' => 'Timportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timportir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtimp' => $model->idtimp, 'tdafimportir_id' => $model->tdafimportir_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtimp' => $model->idtimp, 'tdafimportir_id' => $model->tdafimportir_id], [
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
            'idtimp',
            'npwp',
            'nama',
            'alamat',
            'alamat1',
            'tel',
            'fax',
            'status',
            'tdafimportir_id',
        ],
    ]) ?>

</div>
