<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tnegpelabuhan */

$this->title = $model->idpel;
$this->params['breadcrumbs'][] = ['label' => 'Tnegpelabuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnegpelabuhan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idpel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idpel], [
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
            'idpel',
            'negarapelabuhan',
        ],
    ]) ?>

</div>
