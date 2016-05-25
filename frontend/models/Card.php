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
            'triggeringRollMin' => "Roll Req'd (Min)",
            'triggeringRollMax' => "Roll Req'd (Max)",
            'triggersOn' => 'Triggers On',
            'name' => 'Name',
            'image' => 'Image',
            'description' => 'Description',
            'category' => 'Category',
            'cost' => 'Cost',
            'effect' => 'Effect',
            'effectFrom' => 'Receive From',
            'effectValue' => 'Effect Value',
            'effectMultiplier' => 'Value Multiplier',
            'effectMultiplierCategory' => 'Multiplier Category',
        ];
    }
    
    public function getStatusOptions()
    {
        $statusOptions = [
            '0' => 'Disabled',
            '1' => 'Active',
        ];
        return $statusOptions;
    }
    
    public function getTriggersOnOptions()
    {
        $triggerOptions = [
            'owner' => 'Your Turn',
            'opponent' => "An Opponent's Turn",
            'all' => 'All Turns',
        ];
        return $triggerOptions;
    }
    
    public function getEffectOptions()
    {
        $effectOptions = [
            'receive' => 'Receive Points',
        ];
        return $effectOptions;
    }
    
    public function getEffectFromOptions()
    {
        $effectOptions = [
            'bank' => 'The Bank',
            'opponent' => 'The Roller',
            'all' => 'All Opponent',
        ];
        return $effectOptions;
    }
    
    public function getEffectMultiplierOptions()
    {
        $effectOptions = [
            'none' => 'No Multiplier',
            'category' => 'Multiply By Number Of Buildings In Category',
        ];
        return $effectOptions;
    }
}
