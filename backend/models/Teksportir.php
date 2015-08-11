<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teksportir".
 *
 * @property integer $ideksp
 * @property string $npwp
 * @property string $nama
 * @property string $alamat
 * @property string $alamat1
 * @property string $tel
 * @property string $fax
 * @property string $status
 * @property integer $tdafeksportir_id
 */
class Teksportir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teksportir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['tdafeksportir_id'], 'required'],
            [['tdafeksportir_id'], 'integer'],
            [['npwp', 'alamat', 'alamat1', 'tel', 'fax'], 'string', 'max' => 45],
            [['nama'], 'string', 'max' => 75]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ideksp' => 'Ideksp',
            'npwp' => 'Npwp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'alamat1' => 'Alamat1',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'status' => 'Status',
            'tdafeksportir_id' => 'Tdafeksportir ID',
        ];
    }
}
