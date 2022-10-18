<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

/**========================================================================
 * ?                                ABOUT
 * @author         : Newton Mitro
 * @email          : newtonmitro@gmail.com
 * @repo           : 
 * @createdOn      : 15-10-2022
 * @updatedBy      : Newton Mitro
 * @UpdatedAt      : 18-10-2022
 * @description    : This controller will handle all user management request
 *========================================================================**/

class UserController extends Controller {

    public function index() {
        return response()->json([
            'data'      => UserCollection::collection($this->UsersRepository->all()),
            'message'   => "Users retrieved successfully",
            'errors'    => null,
            'links'     => [
                new LinkObject("Self", "Users", route('users.index'), "GET"),
                new LinkObject("Store", "New User", route('users.store'), "POST"),
            ]
        ]);
    }

    public function store(StoreUserRequest $request) {
        return response()->json([
            'data'      => new UserResource($this->UsersRepository->store($request)),
            'message'   => "User created successfully",
            'errors'    => null,
        ]);
    }

    public function show($user) {
        return response()->json([
            'data'      => new UserResource($this->UsersRepository->show($user)),
            'message'   => "User retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateUserRequest $request,  $user) {
        return response()->json([
            'data' => new UserResource($this->UsersRepository->update($request,  $user)),
            'message' => "User updated successfully",
            'errors' => null,
        ]);
    }

    public function destroy($user) {
        return response()->json([
            'data' => $this->UsersRepository->destroy($user),
            'message' => "User deleted successfully",
            'errors' => null,
        ]);
    }
}
