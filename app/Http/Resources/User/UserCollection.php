<?php

namespace App\Http\Resources\User;

use App\Utilities\LinkObject;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection {

    public function toArray($request) {
        return [
            'userId'           => $this->id,
            'name'             => $this->name,
            'email'            => $this->email,
            'password'         => $this->password,
            'links'            => [
                new LinkObject("show", "View User", route('users.show', $this->id), "GET"),
                new LinkObject("update", "Update User", route('users.update', $this->id), "PUT"),
                new LinkObject("destroy", "Delete User", route('users.destroy', $this->id), "DELETE"),
            ],
        ];
    }
}
