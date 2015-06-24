<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tmaster".
 *
 * @property integer $id
 * @property string $nolphsp
 * @property string $tgllhpsp
 * @property integer $idkapal
 * @property string $voy
 * @property integer $idagen
 * @property string $idpelasal
 * @property string $tglpeldatang
 * @property string $idpeltujuan
 * @property string $tglpeltujuan
 * @property string $jenisdokumen
 * @property string $jenisbarang
 * @property double $berat
 * @property string $satuan
 * @property integer $jumlahkemasan
 * @property double $volume
 * @property string $idchecking
 * @property string $bc11
 * @property string $tglbc11
 * @property string $daftarbekal
 * @property string $bc12
 * @property string $tglbc12
 * @property string $bc13
 * @property string $tglbc13
 * @property string $lhpsp
 * @property string $nippemeriksa
 * @property string $nipatasan1
 * @property string $nipatasan2
 * @property string $datecreated
 * @property string $usercreated
 * @property integer $idkantor
 *
 * @property Tkantor $idkantor0
 * @property Kapal $idkapal0
 * @property Tagen $idagen0
 * @property Tnegpelabuhan $idpelasal0
 * @property Tnegpelabuhan $idpeltujuan0
 * @property Pegawai $nippemeriksa0
 * @property Pegawai $nipatasan10
 * @property Pegawai $nipatasan20
 */
class Tmaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nolphsp', 'tgllhpsp', 'idkapal', 'idagen', 'idpelasal', 'tglpeldatang', 'idchecking', 'nippemeriksa', 'nipatasan1'], 'required'],
            [['tgllhpsp', 'tglpeldatang', 'tglpeltujuan', 'tglbc11', 'tglbc12', 'tglbc13', 'datecreated'], 'safe'],
            [['idkapal', 'idagen', 'jumlahkemasan', 'idkantor'], 'integer'],
            [['jenisdokumen', 'idchecking'], 'string'],
            [['berat', 'volume'], 'number'],
            [['nolphsp', 'idpelasal', 'idpeltujuan'], 'string', 'max' => 6],
            [['voy', 'satuan', 'bc11', 'daftarbekal', 'bc12', 'bc13'], 'string', 'max' => 20],
            [['jenisbarang'], 'string', 'max' => 100],
            [['lhpsp'], 'string', 'max' => 150],
            [['nippemeriksa', 'nipatasan1', 'nipatasan2'], 'string', 'max' => 25],
            [['usercreated'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nolphsp' => 'Nolphsp',
            'tgllhpsp' => 'Tgllhpsp',
            'idkapal' => 'Idkapal',
            'voy' => 'Voy',
            'idagen' => 'Idagen',
            'idpelasal' => 'Idpelasal',
            'tglpeldatang' => 'Tglpeldatang',
            'idpeltujuan' => 'Idpeltujuan',
            'tglpeltujuan' => 'Tglpeltujuan',
            'jenisdokumen' => 'Jenisdokumen',
            'jenisbarang' => 'Jenisbarang',
            'berat' => 'Berat',
            'satuan' => 'Satuan',
            'jumlahkemasan' => 'Jumlahkemasan',
            'volume' => 'Volume',
            'idchecking' => 'Idchecking',
            'bc11' => 'Bc11',
            'tglbc11' => 'Tglbc11',
            'daftarbekal' => 'Daftarbekal',
            'bc12' => 'Bc12',
            'tglbc12' => 'Tglbc12',
            'bc13' => 'Bc13',
            'tglbc13' => 'Tglbc13',
            'lhpsp' => 'Lhpsp',
            'nippemeriksa' => 'Nippemeriksa',
            'nipatasan1' => 'Nipatasan1',
            'nipatasan2' => 'Nipatasan2',
            'datecreated' => 'Datecreated',
            'usercreated' => 'Usercreated',
            'idkantor' => 'Idkantor',
        ];
    }

    public function init() {
     if($this->isNewRecord){
        $this->loadDefaultValues();
     }
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
    public function getIdkapal0()
    {
        return $this->hasOne(Kapal::className(), ['kapal_id' => 'idkapal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdagen0()
    {
        return $this->hasOne(Tagen::className(), ['id' => 'idagen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpelasal0()
    {
        return $this->hasOne(Tnegpelabuhan::className(), ['idpel' => 'idpelasal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpeltujuan0()
    {
        return $this->hasOne(Tnegpelabuhan::className(), ['idpel' => 'idpeltujuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNippemeriksa0()
    {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nippemeriksa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNipatasan10()
    {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nipatasan1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNipatasan20()
    {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nipatasan2']);
    }
}
