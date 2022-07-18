<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Asisten */

$this->title = $model->id_asisten;
$this->params['breadcrumbs'][] = ['label' => 'Asistens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asisten-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_asisten' => $model->id_asisten], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_asisten' => $model->id_asisten], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_asisten',
            'nama_asisten',
            'gaji_asisten',
        ],
    ]) ?>

</div>
