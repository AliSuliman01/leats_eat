<?php

namespace App\Http\Controllers\Users\Users;

use App\Domain\Users\Users\Actions\UserStoreAction;
use App\Domain\Users\Users\Model\User;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Users\DTO\UserDTO;
use App\Http\Requests\Users\Users\UserLogInRequest;
use App\Http\Requests\Users\Users\UserSignUpRequest;
use App\Http\ViewModels\Users\Users\UserIndexVM;
use App\Http\ViewModels\Users\Users\UserShowVM;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return response()->json(Response::success((new UserIndexVM())->toArray()));
    }

    public function show(User $user){
        return response()->json(Response::success((new UserShowVM($user))->toArray()));
    }

    public function sign_up(UserSignUpRequest $request){

        $userDTO = UserDTO::fromRequest($request->validated());
        $user = UserStoreAction::execute($userDTO);

        // TODO: send sms or gmail verification message


        $token = $user->createToken('personal access token',$user->arrayOfRoles() ?? []);
        $user->setAttribute('token', $token->accessToken);

        return response()->json(Response::success($user), 200);
    }

    public function log_in(UserLogInRequest $request){
        $user = (new UserShowVM(UserDTO::fromRequest($request->validated())))->toArray();

        if(!Hash::check($request->password, $user->password)){
            return response()->json(Response::error('invalid credentials'));
        }
        $token = $user->createToken('personal access token',$user->arrayOrRoles() ?? []);
        $user->setAttribute('token', $token->accessToken);
        return response()->json(Response::success($user));
    }

    public function update(){

    }

    public function destroy(){

    }
}
