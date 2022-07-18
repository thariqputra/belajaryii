<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManajerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manajer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_manajer') ?>

    <?= $form->field($model, 'nama_manajer') ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'id_asisten') ?>

    <?= $form->field($model, 'id_ob') ?>

    <?php // echo $form->field($model, 'id_satpam') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
