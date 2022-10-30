<?php

namespace App\Http\Resources\User;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {
    public function toArray($request) {
        return [
            'userId'           => $this->id,
            'userName'         => $this->name,
            'userEmail'         => $this->email,
            'password'         => $this->password,
            'links'            => [
                new LinkObject("index", "Users", route('users.index', false), "GET"),
                new LinkObject("update", "Update User", route('users.update', $this->id, false), "PUT"),
                new LinkObject("destroy", "Delete User", route('users.destroy', $this->id, false), "DELETE"),
            ],
        ];
    }
}
