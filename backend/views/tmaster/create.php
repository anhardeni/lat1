<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tmaster */

$this->title = 'Create Tmaster';
$this->params['breadcrumbs'][] = ['label' => 'Tmasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
