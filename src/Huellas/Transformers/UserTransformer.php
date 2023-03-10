<?php

namespace Huellas\Transformers;

use Huellas\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    public function transform(User $user)
    {
        return [
            'id'        => (int)$user->id,
            'email'     => $user->email,
            'createdAt' => optional($user->created_at)->toIso8601String(),
            'updatedAt' => optional($user->update_at)->toIso8601String(),
            'username'  => $user->username,
            'token'     => $user->token,
        ];
    }
}