<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JenisIdentitas;

/**
 * JenisIdentitasSearch represents the model behind the search form about `backend\models\JenisIdentitas`.
 */
class JenisIdentitasSearch extends JenisIdentitas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_identitas_id'], 'integer'],
            [['jenis_identitas_nama'], 'safe'],
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
        $query = JenisIdentitas::find();

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
            'jenis_identitas_id' => $this->jenis_identitas_id,
        ]);

        $query->andFilterWhere(['like', 'jenis_identitas_nama', $this->jenis_identitas_nama]);

        return $dataProvider;
    }
}
