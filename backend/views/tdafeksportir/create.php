<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tdafeksportir */

$this->title = 'Create Tdafeksportir';
$this->params['breadcrumbs'][] = ['label' => 'Tdafeksportirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdafeksportir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
