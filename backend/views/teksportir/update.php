<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Teksportir */

$this->title = 'Update Teksportir: ' . ' ' . $model->ideksp;
$this->params['breadcrumbs'][] = ['label' => 'Teksportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ideksp, 'url' => ['view', 'ideksp' => $model->ideksp, 'tdafeksportir_id' => $model->tdafeksportir_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teksportir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
