<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pt".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_address
 * @property string $logo
 * @property string $company_start
 * @property string $company_created_date
 * @property string $company_status
 */
class Pt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_email', 'company_address', 'logo', 'company_start', 'company_created_date', 'company_status'], 'required'],
            [['company_start', 'company_created_date'], 'safe'],
            [['company_status'], 'string'],
            [['company_name', 'company_email'], 'string', 'max' => 100],
            [['company_address'], 'string', 'max' => 255],
            [['logo'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_address' => 'Company Address',
            'logo' => 'Logo',
            'company_start' => 'Company Start',
            'company_created_date' => 'Company Created Date',
            'company_status' => 'Company Status',
        ];
    }
}
