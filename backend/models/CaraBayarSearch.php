<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CaraBayar;

/**
 * CaraBayarSearch represents the model behind the search form about `backend\models\CaraBayar`.
 */
class CaraBayarSearch extends CaraBayar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cara_bayar_id'], 'integer'],
            [['cara_bayar_nama', 'cara_bayar_ket'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CaraBayar::find();

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
            'cara_bayar_id' => $this->cara_bayar_id,
        ]);

        $query->andFilterWhere(['like', 'cara_bayar_nama', $this->cara_bayar_nama])
            ->andFilterWhere(['like', 'cara_bayar_ket', $this->cara_bayar_ket]);

        return $dataProvider;
    }
}
