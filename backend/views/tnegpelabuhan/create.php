<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tnegpelabuhan */

$this->title = 'Create Tnegpelabuhan';
$this->params['breadcrumbs'][] = ['label' => 'Tnegpelabuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnegpelabuhan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
