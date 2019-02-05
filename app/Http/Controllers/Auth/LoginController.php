<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return tc(function() use ($request){
            return $this->validateAndLogin($request);
        });
    }

    /**
    * Validate request and log user into the application
    * @param Request $request
    * @return mixed
    */
    public function validateAndLogin(Request $request)
    {
        $validatorInstance = \Validator::make($request->all(),[
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ], [
            'email.required' => 'The email address field is required',
            'email.exists' => 'The provided email address is not in our database',
            'password.required' => 'Please enter a valid password'
        ]);

        if($validatorInstance->fails()){
            return $this->validationErrorResponse($validatorInstance->errors()->first());
        }

        /**
        * Validating Credentials
        **/
        $user = User::whereEmail($request->email)->first();
        
        if(password_verify($request->password, $user->password)){
            return $this->successPasswordResponse("");
        }

        return $this->invalidPasswordResponse();
    }

    /**
    * Send Validation error message
    * @param string $errorMessage
    * @return mixed
    */
    private function validationErrorResponse($errorMessage)
    {
        return respond([
                'error' => $errorMessage
            ], 500, 'error');
    }


    /**
    * Send JSON response 
    * @return mixed
    */
    private function successPasswordResponse($token)
    {
        return respond([
                    'token' => $token
                ], 200);
    }

    /**
    * Send Invalid password response
    * @return mixed
    */
    private function invalidPasswordResponse()
    {
        return respond(
            [
                'error' => "Invalid Password"
            ], 500, 'error');
    }
}
