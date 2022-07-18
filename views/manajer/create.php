<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manajer */

$this->title = 'Create Manajer';
$this->params['breadcrumbs'][] = ['label' => 'Manajers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manajer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
