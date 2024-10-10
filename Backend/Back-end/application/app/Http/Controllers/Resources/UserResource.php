<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nom' => $this->name,
            'prenom' => $this->username,
            'login' => $this->email,
            'image' => $this->getAvatar(),

        ];
    }
}