<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TdafeksportirSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tdafeksportir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'periode') ?>

    <?= $form->field($model, 'peb') ?>

    <?= $form->field($model, 'tglpeb') ?>

    <?= $form->field($model, 'fasilitas') ?>

    <?php // echo $form->field($model, 'jumlahpeb') ?>

    <?php // echo $form->field($model, 'jumlahNP') ?>

    <?php // echo $form->field($model, 'jumlahSanksi') ?>

    <?php // echo $form->field($model, 'datecreated') ?>

    <?php // echo $form->field($model, 'usercreated') ?>

    <?php // echo $form->field($model, 'nipttd') ?>

    <?php // echo $form->field($model, 'idteks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
