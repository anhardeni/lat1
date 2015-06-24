<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tagen */

$this->title = 'Create Tagen';
$this->params['breadcrumbs'][] = ['label' => 'Tagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
