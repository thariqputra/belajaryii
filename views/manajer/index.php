<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ManajerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manajers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manajer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Manajer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_manajer',
            'nama_manajer',
            'id_karyawan',
            'karyawan.nama_karyawan',
            'karyawan.gaji_karyawan',
            'id_asisten',
            'asisten.nama_asisten',
            'asisten.gaji_asisten',
            'id_ob',
            'ob.nama_ob',
            'ob.bidang_ob',
            'id_satpam',
            'satpam.nama_satpam',
            'satpam.alamat_satpam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action,  $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_manajer' => $model->id_manajer]);
                 }
            ],
        ],
    ]); ?>


</div>
