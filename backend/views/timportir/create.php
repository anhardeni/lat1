<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Timportir */

$this->title = 'Create Timportir';
$this->params['breadcrumbs'][] = ['label' => 'Timportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timportir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
