<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tnegpelabuhan */

$this->title = 'Update Tnegpelabuhan: ' . ' ' . $model->idpel;
$this->params['breadcrumbs'][] = ['label' => 'Tnegpelabuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpel, 'url' => ['view', 'id' => $model->idpel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tnegpelabuhan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
