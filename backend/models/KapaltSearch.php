<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kapal;

/**
 * KapaltSearch represents the model behind the search form about `backend\models\Kapal`.
 */
class KapaltSearch extends Kapal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kapal_id'], 'integer'],
            [['kapal_nama', 'kapal_neg'], 'safe'],
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
        $query = Kapal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'kapal_id' => $this->kapal_id,
        ]);

        $query->andFilterWhere(['like', 'kapal_nama', $this->kapal_nama])
            ->andFilterWhere(['like', 'kapal_neg', $this->kapal_neg]);

        return $dataProvider;
    }
}
