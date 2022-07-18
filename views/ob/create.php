<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ob */

$this->title = 'Create Ob';
$this->params['breadcrumbs'][] = ['label' => 'Obs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
