<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TagenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'npwp') ?>

    <?= $form->field($model, 'namaagen') ?>

    <?= $form->field($model, 'pic') ?>

    <?= $form->field($model, 'alamat1') ?>

    <?php // echo $form->field($model, 'alamat2') ?>

    <?php // echo $form->field($model, 'telpon') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
