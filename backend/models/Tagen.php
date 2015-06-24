<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tagen".
 *
 * @property integer $id
 * @property string $npwp
 * @property string $namaagen
 * @property string $pic
 * @property string $alamat1
 * @property string $alamat2
 * @property string $telpon
 * @property string $fax
 * @property string $status
 *
 * @property Tmaster[] $tmasters
 */
class Tagen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tagen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['npwp', 'namaagen', 'alamat1'], 'required'],
            [['status'], 'string'],
            [['npwp'], 'string', 'max' => 15],
            [['namaagen', 'pic', 'telpon', 'fax'], 'string', 'max' => 50],
            [['alamat1', 'alamat2'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'npwp' => 'Npwp',
            'namaagen' => 'Namaagen',
            'pic' => 'Pic',
            'alamat1' => 'Alamat1',
            'alamat2' => 'Alamat2',
            'telpon' => 'Telpon',
            'fax' => 'Fax',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmasters()
    {
        return $this->hasMany(Tmaster::className(), ['idagen' => 'id']);
    }
}
