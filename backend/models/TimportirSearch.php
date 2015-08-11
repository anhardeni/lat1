<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Timportir;

/**
 * TimportirSearch represents the model behind the search form about `backend\models\Timportir`.
 */
class TimportirSearch extends Timportir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtimp', 'tdafimportir_id'], 'integer'],
            [['npwp', 'nama', 'alamat', 'alamat1', 'tel', 'fax', 'status'], 'safe'],
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
        $query = Timportir::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idtimp' => $this->idtimp,
            'tdafimportir_id' => $this->tdafimportir_id,
        ]);

        $query->andFilterWhere(['like', 'npwp', $this->npwp])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'alamat1', $this->alamat1])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
