<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kapal".
 *
 * @property integer $kapal_id
 * @property string $kapal_nama
 * @property string $kapal_neg
 */
class Kapal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kapal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kapal_nama', 'kapal_neg'], 'string', 'max' => 50]
        ];
    }
    /*
    public function getMyreport()
        {
            $from=$_REQUEST['from'];
            $until=$_REQUEST['until']; 
            //$model = kapal::find()
	//->where("kapal_id" >= '$from' and "kapal_id" >= '$until')
	//->all();
         $sql="SELECT * FROM kapal where kapal_id >= '$from' and kapal_id <= '$until' order by ITEM_ID desc "; // your sql here
        $dataReportItem=new CSqlDataProvider($sql,array(
            'keyField' => 'ITEM_ID',
            'pagination'=>array(
                'pageSize'=>10,
            ),
        )); 
        return $dataReportItem;
        }
     * /
     */
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kapal_id' => 'Kapal ID',
            'kapal_nama' => 'Kapal Nama',
            'kapal_neg' => 'Kapal Neg',
        ];
    }
}
