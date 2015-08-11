<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "timportir".
 *
 * @property integer $idtimp
 * @property string $npwp
 * @property string $nama
 * @property string $alamat
 * @property string $alamat1
 * @property string $tel
 * @property string $fax
 * @property string $status
 * @property integer $tdafimportir_id
 */
class Timportir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timportir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['tdafimportir_id'], 'required'],
            [['tdafimportir_id'], 'integer'],
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
            'idtimp' => 'Idtimp',
            'npwp' => 'Npwp',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'alamat1' => 'Alamat1',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'status' => 'Status',
            'tdafimportir_id' => 'Tdafimportir ID',
        ];
    }
}
