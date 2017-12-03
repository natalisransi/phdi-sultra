<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bayar;

/**
 * BayarSearch represents the model behind the search form about `backend\models\Bayar`.
 */
class BayarSearch extends Bayar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bayar_id', 'anggota_id', 'cara_bayar_id', 'jenis_bayar_id'], 'integer'],
            [['bayar_tgl', 'bukti_file', 'ket'], 'safe'],
            [['jumlah'], 'number'],
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
        $query = Bayar::find();

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
            'bayar_id' => $this->bayar_id,
            'anggota_id' => $this->anggota_id,
            'bayar_tgl' => $this->bayar_tgl,
            'jumlah' => $this->jumlah,
            'cara_bayar_id' => $this->cara_bayar_id,
            'jenis_bayar_id' => $this->jenis_bayar_id,
        ]);

        $query->andFilterWhere(['like', 'bukti_file', $this->bukti_file])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
