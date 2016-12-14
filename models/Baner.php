<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "baner".
 *
 * @property integer $id
 * @property integer $id_place
 * @property string $path
 * @property string $opis
 * @property string $ssilka
 * @property string $time_from
 * @property string $time_to
 * @property integer $id_user
 * @property integer $active
 * @property integer $wisota
 * @property integer $shir
 */
class Baner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'baner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_place', 'path', 'opis', 'ssilka', 'time_from', 'time_to', 'id_user', 'active', 'wisota', 'shir'], 'required'],
            [['id_place', 'id_user', 'active', 'wisota', 'shir'], 'integer'],
            [['time_from', 'time_to'], 'safe'],
            [['path', 'opis', 'ssilka'], 'string', 'max' => 255],
        ];
    }

    public function saveBanner()
    {

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_place' => 'Id Place',
            'path' => 'Path',
            'opis' => 'Opis',
            'ssilka' => 'Ssilka',
            'time_from' => 'Time From',
            'time_to' => 'Time To',
            'id_user' => 'Id User',
            'active' => 'Active',
            'wisota' => 'Wisota',
            'shir' => 'Shir',
        ];
    }
}
