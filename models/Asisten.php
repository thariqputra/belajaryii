<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asisten".
 *
 * @property int $id_asisten
 * @property string $nama_asisten
 * @property int $gaji_asisten
 */
class Asisten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asisten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_asisten', 'gaji_asisten'], 'required'],
            [['gaji_asisten'], 'integer'],
            [['nama_asisten'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_asisten' => 'Id Asisten',
            'nama_asisten' => 'Nama Asisten',
            'gaji_asisten' => 'Gaji Asisten',
        ];
    }
}
