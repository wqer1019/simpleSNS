<?php

namespace App\Transformers;

use App\Models\Follow;
use League\Fractal\TransformerAbstract;

class FollowTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];

    public function transform(Follow $follow)
    {
        return [
            'id' => $follow->id,
            'user' => $follow->user,
            'follow_user' => $follow->follow,
            'created_at' => $follow->created_at->toDateTimeString(),
            'updated_at' => $follow->updated_at->toDateTimeString()
        ];
    }
}
