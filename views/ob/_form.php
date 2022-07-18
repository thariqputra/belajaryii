<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ob */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ob-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_ob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bidang_ob')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
