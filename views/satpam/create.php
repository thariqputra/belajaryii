<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Satpam */

$this->title = 'Create Satpam';
$this->params['breadcrumbs'][] = ['label' => 'Satpams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satpam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
