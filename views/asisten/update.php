<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asisten */

$this->title = 'Update Asisten: ' . $model->id_asisten;
$this->params['breadcrumbs'][] = ['label' => 'Asistens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_asisten, 'url' => ['view', 'id_asisten' => $model->id_asisten]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asisten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
