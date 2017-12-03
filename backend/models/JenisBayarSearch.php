<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JenisBayar;

/**
 * JenisBayarSearch represents the model behind the search form about `backend\models\JenisBayar`.
 */
class JenisBayarSearch extends JenisBayar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_bayar_id'], 'integer'],
            [['jenis_bayar_nama', 'jenis_bayar_key'], 'safe'],
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
        $query = JenisBayar::find();

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
            'jenis_bayar_id' => $this->jenis_bayar_id,
        ]);

        $query->andFilterWhere(['like', 'jenis_bayar_nama', $this->jenis_bayar_nama])
            ->andFilterWhere(['like', 'jenis_bayar_key', $this->jenis_bayar_key]);

        return $dataProvider;
    }
}
