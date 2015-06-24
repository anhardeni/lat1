<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tnegpelabuhan".
 *
 * @property string $idpel
 * @property string $negarapelabuhan
 *
 * @property Tmaster[] $tmasters
 */
class Tnegpelabuhan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tnegpelabuhan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpel', 'negarapelabuhan'], 'required'],
            [['idpel'], 'string', 'max' => 3],
            [['negarapelabuhan'], 'string', 'max' => 55]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpel' => 'Idpel',
            'negarapelabuhan' => 'Negarapelabuhan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmasters()
    {
        return $this->hasMany(Tmaster::className(), ['idpeltujuan' => 'idpel']);
    }
}
