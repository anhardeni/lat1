<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kapal;
//use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Tmaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nolphsp')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'tgllhpsp')->textInput() ?>

   
<?=          
                $form->field($model, 'idkapal')->dropDownList(
                ArrayHelper::map(Kapal::find()->all(), 'kapal_id', 'kapal_nama'),
                ['prompt'=> 'pilih kapal']
               
                );
            
            ?>
    <?= $form->field($model, 'voy')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'idagen')->textInput() ?>
                

    <?= $form->field($model, 'idpelasal')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'tglpeldatang')->textInput() ?>

    <?= $form->field($model, 'idpeltujuan')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'tglpeltujuan')->textInput() ?>

    <?= $form->field($model, 'jenisdokumen')->dropDownList([ 'PIB' => 'PIB', 'PEB' => 'PEB', 'BC11' => 'BC11', 'BC12' => 'BC12', 'BC13' => 'BC13', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenisbarang')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'berat')->textInput() ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'jumlahkemasan')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'idchecking')->dropDownList([ 'ca' => 'Ca', 'cr' => 'Cr', 'cb' => 'Cb', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bc11')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tglbc11')->textInput() ?>

    <?= $form->field($model, 'daftarbekal')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'bc12')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tglbc12')->textInput() ?>

    <?= $form->field($model, 'bc13')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tglbc13')->textInput() ?>

    <?= $form->field($model, 'lhpsp')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'nippemeriksa')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'nipatasan1')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'nipatasan2')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'datecreated')->textInput() ?>

    <?= $form->field($model, 'usercreated')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'idkantor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
