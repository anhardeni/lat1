<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tmaster;
use backend\models\TmasterSearch;

/**
 * TmasterSearch represents the model behind the search form about `backend\models\Tmaster`.
 */
class TmasterSearch extends Tmaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',  'idagen', 'jumlahkemasan', 'idkantor'], 'integer'],
            [['nolphsp', 'idkapal','tgllhpsp', 'voy', 'idpelasal', 'tglpeldatang', 'idpeltujuan', 'tglpeltujuan', 'jenisdokumen', 'jenisbarang', 'satuan', 'idchecking', 'bc11', 'tglbc11', 'daftarbekal', 'bc12', 'tglbc12', 'bc13', 'tglbc13', 'lhpsp', 'nippemeriksa', 'nipatasan1', 'nipatasan2', 'datecreated', 'usercreated'], 'safe'],
            [['berat', 'volume'], 'number'],
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
        //$date_from= 'date_from',
      //  $date_to = 'date_to
            $query = Tmaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        } 

/* bmuat query dulu
 * 
 */
    $query->joinWith('idkapal0');


        $query->andFilterWhere([
            'id' => $this->id,
         //   'tgllhpsp' => $this->tgllhpsp,
           
            'idagen' => $this->idagen,
            'tglpeldatang' => $this->tglpeldatang,
            'tglpeltujuan' => $this->tglpeltujuan,
            'berat' => $this->berat,
            'jumlahkemasan' => $this->jumlahkemasan,
            'volume' => $this->volume,
            'tglbc11' => $this->tglbc11,
            'tglbc12' => $this->tglbc12,
            'tglbc13' => $this->tglbc13,
            'datecreated' => $this->datecreated,
            'idkantor' => $this->idkantor,
        ]);
if(isset($this->tgllhpsp) && $this->tgllhpsp!=''){
                  $date_explode = explode("TO", $this->tgllhpsp);
                  $date1 = trim($date_explode[0]);
                   $date2 = trim($date_explode[1]);
              $query->andFilterWhere(['between', 'tgllhpsp',$date1,$date2]);  
                }
           
                
      $query->andFilterWhere(['like', 'nolphsp', $this->nolphsp])
            ->andFilterWhere(['like', 'voy', $this->voy])
            ->andFilterWhere(['like', 'idpelasal', $this->idpelasal])
            ->andFilterWhere(['like', 'idpeltujuan', $this->idpeltujuan])
            ->andFilterWhere(['like', 'jenisdokumen', $this->jenisdokumen])
            ->andFilterWhere(['like', 'jenisbarang', $this->jenisbarang])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'idchecking', $this->idchecking])
            ->andFilterWhere(['like', 'bc11', $this->bc11])
            ->andFilterWhere(['like', 'daftarbekal', $this->daftarbekal])
            ->andFilterWhere(['like', 'bc12', $this->bc12])
            ->andFilterWhere(['like', 'bc13', $this->bc13])
            ->andFilterWhere(['like', 'lhpsp', $this->lhpsp])
            ->andFilterWhere(['like', 'nippemeriksa', $this->nippemeriksa])
            ->andFilterWhere(['like', 'nipatasan1', $this->nipatasan1])
            ->andFilterWhere(['like', 'nipatasan2', $this->nipatasan2])
            ->andFilterWhere(['like', 'usercreated', $this->usercreated])
              
            ->andFilterWhere(['like', 'kapal.kapal_nama', $this->idkapal])   
                
                
                
         
            //->andFilterWhere(['>=', 'tgllhpsp', $this->startDate])
           //->andFilterWhere(['<=', 'tgllhpsp', $this->endDate])
                ;
        
        return $dataProvider;
    }
}
