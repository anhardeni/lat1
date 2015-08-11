<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Timportir */

$this->title = 'Update Timportir: ' . ' ' . $model->idtimp;
$this->params['breadcrumbs'][] = ['label' => 'Timportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtimp, 'url' => ['view', 'idtimp' => $model->idtimp, 'tdafimportir_id' => $model->tdafimportir_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timportir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
