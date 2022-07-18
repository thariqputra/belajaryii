<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ob;

/**
 * ObSearch represents the model behind the search form of `app\models\Ob`.
 */
class ObSearch extends Ob
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ob'], 'integer'],
            [['nama_ob', 'bidang_ob'], 'safe'],
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
        $query = Ob::find();

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
            'id_ob' => $this->id_ob,
        ]);

        $query->andFilterWhere(['like', 'nama_ob', $this->nama_ob])
            ->andFilterWhere(['like', 'bidang_ob', $this->bidang_ob]);

        return $dataProvider;
    }
}
