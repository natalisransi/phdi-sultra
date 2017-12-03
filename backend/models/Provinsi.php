<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property integer $provinsi_id
 * @property string $provinsi_kode
 * @property string $provinsi_nama
 *
 * @property Kabupaten[] $kabupatens
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provinsi_kode'], 'string', 'max' => 45],
            [['provinsi_nama'], 'string', 'max' => 145],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'provinsi_id' => 'Provinsi ID',
            'provinsi_kode' => 'Provinsi Kode',
            'provinsi_nama' => 'Provinsi Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatens()
    {
        return $this->hasMany(Kabupaten::className(), ['provinsi_id' => 'provinsi_id']);
    }
}
