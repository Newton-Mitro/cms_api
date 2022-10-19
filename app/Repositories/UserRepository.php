<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\UserRepositoryInterface;


/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Newton Mitro
 * @email          :  newtonmitro@gmail.com
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @updatedAt      :  19-10-2022
 * @description    :  This repository will handle all database operation for users data.
 *------------------------------------------------------------------------**/

class UserRepository implements UserRepositoryInterface {

    public function all() {
        return User::paginate(10);
    }

    public function store($request) {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

    public function show($userId) {
        return User::findOrFail($userId);
    }

    public function update($request,  $userId) {
        $user = User::findOrFail($userId);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->update();
        return  $user;
    }

    public function destroy($userId) {
        return User::findOrFail($userId)->delete();
    }
}
