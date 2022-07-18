<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manajer */

$this->title = 'Update Manajer: ' . $model->id_manajer;
$this->params['breadcrumbs'][] = ['label' => 'Manajers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_manajer, 'url' => ['view', 'id_manajer' => $model->id_manajer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manajer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
