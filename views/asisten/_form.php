<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asisten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asisten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_asisten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji_asisten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
