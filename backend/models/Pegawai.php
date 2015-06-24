<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $nip
 * @property string $nama
 * @property string $pangkatgol
 * @property string $jabatan
 * @property string $unit
 * @property string $status
 * @property integer $idkantor
 *
 * @property Tkantor $idkantor0
 * @property Tmaster[] $tmasters
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'pangkatgol', 'jabatan', 'unit'], 'required'],
            [['status'], 'string'],
            [['idkantor'], 'integer'],
            [['nip'], 'string', 'max' => 25],
            [['nama'], 'string', 'max' => 55],
            [['pangkatgol', 'unit'], 'string', 'max' => 50],
            [['jabatan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'pangkatgol' => 'Pangkatgol',
            'jabatan' => 'Jabatan',
            'unit' => 'Unit',
            'status' => 'Status',
            'idkantor' => 'Idkantor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdkantor0()
    {
        return $this->hasOne(Tkantor::className(), ['idkantor' => 'idkantor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmasters()
    {
        return $this->hasMany(Tmaster::className(), ['nipatasan2' => 'nip']);
    }
}
