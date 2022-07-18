<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ob".
 *
 * @property int $id_ob
 * @property string $nama_ob
 * @property string $bidang_ob
 */
class Ob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ob';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ob', 'bidang_ob'], 'required'],
            [['nama_ob', 'bidang_ob'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ob' => 'Id Ob',
            'nama_ob' => 'Nama Ob',
            'bidang_ob' => 'Bidang Ob',
        ];
    }
}
