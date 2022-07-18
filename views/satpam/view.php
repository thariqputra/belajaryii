<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Satpam */

$this->title = $model->id_satpam;
$this->params['breadcrumbs'][] = ['label' => 'Satpams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="satpam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_satpam' => $model->id_satpam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_satpam' => $model->id_satpam], [
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
            'id_satpam',
            'nama_satpam',
            'alamat_satpam:ntext',
        ],
    ]) ?>

</div>
