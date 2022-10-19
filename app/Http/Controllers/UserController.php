<?php

namespace App\Http\Controllers;

use App\Utilities\LinkObject;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface;

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

    private $UserRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        return $this->UserRepository = $userRepository;
    }

    public function index() {
        return response()->json([
            'data'      => UserCollection::collection($this->UserRepository->all()),
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
            'data'      => new UserResource($this->UserRepository->store($request)),
            'message'   => "User created successfully",
            'errors'    => null,
        ]);
    }

    public function show($userId) {
        return response()->json([
            'data'      => new UserResource($this->UserRepository->show($userId)),
            'message'   => "User retrieved successfully",
            'errors'    => null,
        ]);
    }

    public function update(UpdateUserRequest $request,  $userId) {
        return response()->json([
            'data'      => new UserResource($this->UserRepository->update($request,  $userId)),
            'message'   => "User updated successfully",
            'errors'    => null,
        ]);
    }

    public function destroy($userId) {
        $result = $this->UserRepository->destroy($userId) ? "User deleted successfully" : "User not found or unable to delete user";
        return response()->json([
            'data'      => null,
            'message'   => $result,
            'errors'    => null,
        ]);
    }
}
