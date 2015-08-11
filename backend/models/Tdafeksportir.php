<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tdafeksportir".
 *
 * @property integer $id
 * @property string $periode
 * @property string $peb
 * @property string $tglpeb
 * @property string $fasilitas
 * @property integer $jumlahpeb
 * @property double $jumlahNP
 * @property double $jumlahSanksi
 * @property string $datecreated
 * @property integer $usercreated
 * @property string $nipttd
 * @property integer $idteks
 *
 * @property Teksportir $idteks0
 */
class Tdafeksportir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tdafeksportir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tglpeb', 'datecreated'], 'safe'],
            [['jumlahpeb', 'usercreated', 'idteks'], 'integer'],
            [['jumlahNP', 'jumlahSanksi'], 'number'],
            [['periode', 'fasilitas'], 'string', 'max' => 45],
            [['peb'], 'string', 'max' => 6],
            [['nipttd'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'periode' => 'Periode',
            'peb' => 'Peb',
            'tglpeb' => 'Tglpeb',
            'fasilitas' => 'Fasilitas',
            'jumlahpeb' => 'Jumlahpeb',
            'jumlahNP' => 'Jumlah Np',
            'jumlahSanksi' => 'Jumlah Sanksi',
            'datecreated' => 'Datecreated',
            'usercreated' => 'Usercreated',
            'nipttd' => 'Nipttd',
            'idteks' => 'Idteks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdteks0()
    {
        return $this->hasOne(Teksportir::className(), ['ideksp' => 'idteks']);
    }
}
