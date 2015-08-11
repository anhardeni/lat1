<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\daterange\DateRangePicker;



echo '<label class="control-label">Date Range</label>';
echo '<div class="drp-container">';




/* @var $this yii\web\View */
/* @var $model backend\models\TmasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nolphsp') ?>

    <?= $form->field($model, 'tgllhpsp') ?>
        
    <?= $form->field($model, 'idkapal') ?>

    <?= $form->field($model, 'voy') ?>

    <?php // echo $form->field($model, 'idagen') ?>

    <?php // echo $form->field($model, 'idpelasal') ?>

    <?php // echo $form->field($model, 'tglpeldatang') ?>

    <?php // echo $form->field($model, 'idpeltujuan') ?>

    <?php // echo $form->field($model, 'tglpeltujuan') ?>

    <?php // echo $form->field($model, 'jenisdokumen') ?>

    <?php // echo $form->field($model, 'jenisbarang') ?>

    <?php // echo $form->field($model, 'berat') ?>

    <?php // echo $form->field($model, 'satuan') ?>

    <?php // echo $form->field($model, 'jumlahkemasan') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'idchecking') ?>

    <?php // echo $form->field($model, 'bc11') ?>

    <?php // echo $form->field($model, 'tglbc11') ?>

    <?php // echo $form->field($model, 'daftarbekal') ?>

    <?php // echo $form->field($model, 'bc12') ?>

    <?php // echo $form->field($model, 'tglbc12') ?>

    <?php // echo $form->field($model, 'bc13') ?>

    <?php // echo $form->field($model, 'tglbc13') ?>

    <?php // echo $form->field($model, 'lhpsp') ?>

    <?php // echo $form->field($model, 'nippemeriksa') ?>

    <?php // echo $form->field($model, 'nipatasan1') ?>

    <?php // echo $form->field($model, 'nipatasan2') ?>

    <?php // echo $form->field($model, 'datecreated') ?>

    <?php // echo $form->field($model, 'usercreated') ?>

    <?php // echo $form->field($model, 'idkantor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
