<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ob */

$this->title = $model->id_ob;
$this->params['breadcrumbs'][] = ['label' => 'Obs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ob-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ob' => $model->id_ob], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ob' => $model->id_ob], [
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
            'id_ob',
            'nama_ob',
            'bidang_ob',
        ],
    ]) ?>

</div>
