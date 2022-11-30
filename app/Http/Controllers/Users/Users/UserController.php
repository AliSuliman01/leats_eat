<?php

namespace App\Http\Controllers\Users\Users;

use App\Domain\Users\Users\Actions\UserStoreAction;
use App\Domain\Users\Users\Model\User;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Users\DTO\UserDTO;
use App\Http\Requests\Users\Users\ChangePasswordRequest;
use App\Http\Requests\Users\Users\ResetPasswordRequest;
use App\Http\Requests\Users\Users\UserLogInRequest;
use App\Http\Requests\Users\Users\UserSignUpRequest;
use App\Http\ViewModels\Users\Users\UserIndexVM;
use App\Http\ViewModels\Users\Users\UserShowVM;
use App\Notifications\MailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
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

        $data = $request->validated();
        $userDTO = UserDTO::fromRequest($data);
        $user = UserStoreAction::execute($userDTO);

        $token = $user->createToken('personal access token',$user->arrayOfRoles() ?? []);
        $user->setAttribute('token', $token->accessToken);

        return response()->json(Response::success($user), 200);
    }

    public function log_in(UserLogInRequest $request){
        $user = (new UserShowVM(UserDTO::fromRequest($request->validated())))->toArray();

        if(!Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return response()->json(Response::error('invalid Email Or Password'));
        }
        $token = $user->createToken('personal access token',$user->arrayOfRoles() ?? []);
        $user->setAttribute('token', $token->accessToken);
        return response()->json(Response::success($user));
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(Response::success("Logout Success"));
    }

    public function change_password(ChangePasswordRequest $request)
    {

        $user = (new UserShowVM(UserDTO::fromRequest($request->validated())))->toArray();

            $random = rand(100000, 999999);
            $arr = [
                'title' => 'Hi',
                'body' => 'The verification code is : ',
                'code' => $random,
                'lastLine' => 'Thanks'
            ];

            Notification::route('mail', $request->email)->notify(new MailNotification($arr));
            return response()->json(Response::success($arr));

    }

    public function reset_password(ResetPasswordRequest $request)
    {
        $user = (new UserShowVM(UserDTO::fromRequest($request->validated())))->toArray();
        $user['password'] = Hash::make($request->password);
        $user->update();
        return response()->json(Response::success("Reset Password is Success"));
    }

    public function update(){

    }

    public function destroy(){

    }
}
