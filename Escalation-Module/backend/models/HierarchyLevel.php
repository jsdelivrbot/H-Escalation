<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hierarchy_level".
 *
 * @property integer $id
 * @property string $level_num
 *
 * @property User[] $users
 */
class HierarchyLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hierarchy_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_num'], 'required'],
            [['level_num'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_num' => 'Level Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['hierarchy_level_id' => 'id']);
    }
}
