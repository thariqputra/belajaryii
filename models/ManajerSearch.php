<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manajer;

/**
 * ManajerSearch represents the model behind the search form of `app\models\Manajer`.
 */
class ManajerSearch extends Manajer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_manajer', 'id_karyawan', 'id_asisten', 'id_ob', 'id_satpam'], 'integer'],
            [['nama_manajer'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Manajer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_manajer' => $this->id_manajer,
            'id_karyawan' => $this->id_karyawan,
            'id_asisten' => $this->id_asisten,
            'id_ob' => $this->id_ob,
            'id_satpam' => $this->id_satpam,
        ]);

        $query->andFilterWhere(['like', 'nama_manajer', $this->nama_manajer]);

        return $dataProvider;
    }
}
