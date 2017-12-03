<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anggota_has_pekerjaan".
 *
 * @property integer $anggota_has_pekerjaan_id
 * @property integer $anggota_id
 * @property integer $pekerjaan_id
 * @property string $mulai
 * @property string $akhir
 *
 * @property Anggota $anggota
 * @property Pekerjaan $pekerjaan
 */
class AnggotaHasPekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota_has_pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anggota_id', 'pekerjaan_id'], 'required'],
            [['anggota_id', 'pekerjaan_id'], 'integer'],
            [['mulai', 'akhir'], 'safe'],
            [['anggota_id'], 'exist', 'skipOnError' => true, 'targetClass' => Anggota::className(), 'targetAttribute' => ['anggota_id' => 'anggota_id']],
            [['pekerjaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pekerjaan::className(), 'targetAttribute' => ['pekerjaan_id' => 'pekerjaan_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anggota_has_pekerjaan_id' => 'Anggota Has Pekerjaan ID',
            'anggota_id' => 'Anggota ID',
            'pekerjaan_id' => 'Pekerjaan ID',
            'mulai' => 'Mulai',
            'akhir' => 'Akhir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnggota()
    {
        return $this->hasOne(Anggota::className(), ['anggota_id' => 'anggota_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaan()
    {
        return $this->hasOne(Pekerjaan::className(), ['pekerjaan_id' => 'pekerjaan_id']);
    }
}
