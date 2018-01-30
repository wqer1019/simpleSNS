<?php
/**
 * Created by PhpStorm.
 * User: 孙龙
 * Date: 2018/1/21
 * Time: 20:00
 */

namespace App\Models;

class Follow extends BaseModel
{
    protected $fillable = ['user_id', 'follow_type', 'follow_id'];

    public function scopeByType($query, $type)
    {
        return $query->where('follow_type', $type);
    }

}