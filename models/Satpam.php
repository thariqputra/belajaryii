<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "satpam".
 *
 * @property int $id_satpam
 * @property string $nama_satpam
 * @property string $alamat_satpam
 */
class Satpam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satpam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_satpam', 'alamat_satpam'], 'required'],
            [['alamat_satpam'], 'string'],
            [['nama_satpam'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_satpam' => 'Id Satpam',
            'nama_satpam' => 'Nama Satpam',
            'alamat_satpam' => 'Alamat Satpam',
        ];
    }
}
