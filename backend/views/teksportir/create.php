<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Teksportir */

$this->title = 'Create Teksportir';
$this->params['breadcrumbs'][] = ['label' => 'Teksportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teksportir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
