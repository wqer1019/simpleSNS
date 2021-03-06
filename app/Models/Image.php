<?php

/*
 * add .styleci.yml
 */

namespace App\Models;

class Image extends BaseModel
{
    protected $fillable = ['hash', 'mime', 'ext', 'title', 'width', 'height', 'creator_id'];

    protected $primaryKey = 'hash';

    protected $keyType = 'char';

    public $incrementing = false;
}
