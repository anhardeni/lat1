<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tdafeksportir */

$this->title = 'Update Tdafeksportir: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tdafeksportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tdafeksportir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
