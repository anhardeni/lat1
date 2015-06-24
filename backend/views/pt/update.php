<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pt */

$this->title = 'Update Pt: ' . ' ' . $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Pts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_id, 'url' => ['view', 'id' => $model->company_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
