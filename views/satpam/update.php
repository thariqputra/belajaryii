<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Satpam */

$this->title = 'Update Satpam: ' . $model->id_satpam;
$this->params['breadcrumbs'][] = ['label' => 'Satpams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_satpam, 'url' => ['view', 'id_satpam' => $model->id_satpam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satpam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
