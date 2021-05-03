<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Requests\UserRegistPost;

class UserController extends Controller{
    //引数でUserRegistPostクラスのインスタンスを渡す
    public function register(UserRegistPost $request){
        $rules = [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
        ];
        //全ての入力値を取得し保持
        $inputs = $request->all();

        //validatorクラスのインスタンスを作成
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            //エラー処理
        }

        //インスタンスに対して値を問い合わせ
        $name = $request->input('name');
        $email = $request->input('email');
    }
}