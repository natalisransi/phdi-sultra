<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "anggota_has_pendidikan".
 *
 * @property integer $anggota_has_pendidikan_id
 * @property integer $anggota_id
 * @property integer $pendidikan_id
 * @property string $mulai
 * @property string $akhir
 * @property string $gelar
 * @property string $file
 *
 * @property Anggota $anggota
 * @property Pendidikan $pendidikan
 */
class AnggotaHasPendidikan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota_has_pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anggota_id', 'pendidikan_id'], 'required'],
            [['anggota_id', 'pendidikan_id'], 'integer'],
            [['mulai', 'akhir'], 'safe'],
            [['gelar'], 'string', 'max' => 45],
            [['file'], 'string', 'max' => 145],
            [['anggota_id'], 'exist', 'skipOnError' => true, 'targetClass' => Anggota::className(), 'targetAttribute' => ['anggota_id' => 'anggota_id']],
            [['pendidikan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::className(), 'targetAttribute' => ['pendidikan_id' => 'pendidikan_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'anggota_has_pendidikan_id' => 'Anggota Has Pendidikan ID',
            'anggota_id' => 'Anggota ID',
            'pendidikan_id' => 'Pendidikan ID',
            'mulai' => 'Mulai',
            'akhir' => 'Akhir',
            'gelar' => 'Gelar',
            'file' => 'File',
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
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['pendidikan_id' => 'pendidikan_id']);
    }
}
