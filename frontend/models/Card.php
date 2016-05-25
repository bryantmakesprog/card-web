<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "card".
 *
 * @property integer $id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $triggeringRollMin
 * @property integer $triggeringRollMax
 * @property string $triggersOn
 * @property string $name
 * @property string $image
 * @property string $description
 * @property integer $category
 * @property integer $cost
 * @property string $effect
 * @property string $effectFrom
 * @property integer $effectValue
 * @property string $effectMultiplier
 * @property integer $effectMultiplierCategory
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'triggeringRollMin', 'triggeringRollMax', 'category', 'cost', 'effectValue', 'effectMultiplierCategory'], 'integer'],
            [['created_at', 'updated_at', 'triggeringRollMin', 'triggeringRollMax', 'triggersOn', 'name', 'image', 'description', 'cost', 'effect', 'effectFrom', 'effectValue', 'effectMultiplier'], 'required'],
            [['description'], 'string'],
            [['triggersOn', 'name', 'image', 'effect', 'effectFrom', 'effectMultiplier'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'triggeringRollMin' => 'Triggering Roll Min',
            'triggeringRollMax' => 'Triggering Roll Max',
            'triggersOn' => 'Triggers On',
            'name' => 'Name',
            'image' => 'Image',
            'description' => 'Description',
            'category' => 'Category',
            'cost' => 'Cost',
            'effect' => 'Effect',
            'effectFrom' => 'Effect From',
            'effectValue' => 'Effect Value',
            'effectMultiplier' => 'Effect Multiplier',
            'effectMultiplierCategory' => 'Effect Multiplier Category',
        ];
    }
}
