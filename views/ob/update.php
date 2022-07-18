<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ob */

$this->title = 'Update Ob: ' . $model->id_ob;
$this->params['breadcrumbs'][] = ['label' => 'Obs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ob, 'url' => ['view', 'id_ob' => $model->id_ob]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
