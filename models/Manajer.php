<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manajer".
 *
 * @property int $id_manajer
 * @property string $nama_manajer
 * @property int $id_karyawan
 * @property int $id_asisten
 * @property int $id_ob
 * @property int $id_satpam
 */
class Manajer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manajer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_manajer', 'id_karyawan', 'id_asisten', 'id_ob', 'id_satpam'], 'required'],
            [['id_karyawan', 'id_asisten', 'id_ob', 'id_satpam'], 'integer'],
            [['nama_manajer'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_manajer' => 'Id Manajer',
            'nama_manajer' => 'Nama Manajer',
            'id_karyawan' => 'Id Karyawan',
            'id_asisten' => 'Id Asisten',
            'id_ob' => 'Id Ob',
            'id_satpam' => 'Id Satpam',
        ];
    }
    public function getAsisten(){
        return $this->hasOne (Asisten::classname(), ['id_asisten' => 'id_asisten']);
    }
    public function getKaryawan(){
        return $this->hasOne (Karyawan::classname(), ['id_karyawan' => 'id_karyawan']);
    }
    public function getOb(){
        return $this->hasOne (Ob::classname(), ['id_ob' => 'id_ob']);
    }
    public function getSatpam(){
        return $this->hasOne (Satpam::classname(), ['id_satpam' => 'id_satpam']);
    }
    
    
}
