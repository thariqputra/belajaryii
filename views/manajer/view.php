<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Manajer */

$this->title = $model->id_manajer;
$this->params['breadcrumbs'][] = ['label' => 'Manajers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="manajer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_manajer' => $model->id_manajer], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_manajer' => $model->id_manajer], [
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
            'id_manajer',
            'nama_manajer',
            'id_karyawan',
            'id_asisten',
            'id_ob',
            'id_satpam',
        ],
    ]) ?>

</div>
