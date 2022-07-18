<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manajer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manajer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_manajer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_karyawan')->textInput() ?>

    <?= $form->field($model, 'id_asisten')->textInput() ?>

    <?= $form->field($model, 'id_ob')->textInput() ?>

    <?= $form->field($model, 'id_satpam')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
