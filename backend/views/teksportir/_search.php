<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeksportirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teksportir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ideksp') ?>

    <?= $form->field($model, 'npwp') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'alamat1') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tdafeksportir_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
