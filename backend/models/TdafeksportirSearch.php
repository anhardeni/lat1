<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tdafeksportir;

/**
 * TdafeksportirSearch represents the model behind the search form about `backend\models\Tdafeksportir`.
 */
class TdafeksportirSearch extends Tdafeksportir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlahpeb', 'usercreated', 'idteks'], 'integer'],
            [['periode', 'peb', 'tglpeb', 'fasilitas', 'datecreated', 'nipttd'], 'safe'],
            [['jumlahNP', 'jumlahSanksi'], 'number'],
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
        $query = Tdafeksportir::find();

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
            'id' => $this->id,
            'tglpeb' => $this->tglpeb,
            'jumlahpeb' => $this->jumlahpeb,
            'jumlahNP' => $this->jumlahNP,
            'jumlahSanksi' => $this->jumlahSanksi,
            'datecreated' => $this->datecreated,
            'usercreated' => $this->usercreated,
            'idteks' => $this->idteks,
        ]);

        $query->andFilterWhere(['like', 'periode', $this->periode])
            ->andFilterWhere(['like', 'peb', $this->peb])
            ->andFilterWhere(['like', 'fasilitas', $this->fasilitas])
            ->andFilterWhere(['like', 'nipttd', $this->nipttd]);

        return $dataProvider;
    }
}
