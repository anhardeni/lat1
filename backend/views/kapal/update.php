<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kapal */

$this->title = 'Update Kapal: ' . ' ' . $model->kapal_id;
$this->params['breadcrumbs'][] = ['label' => 'Kapals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kapal_id, 'url' => ['view', 'id' => $model->kapal_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kapal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>