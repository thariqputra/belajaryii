<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */

$this->title = 'Create Karyawan';
$this->params['breadcrumbs'][] = ['label' => 'Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="karyawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
