<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Http\Requests\UserRegistPost;

class UserController extends Controller{

    //引数でUserRegistPostクラスのインスタンスを渡す
    public function register(UserRegistPost $request){
        //インスタンスに対して値を問い合わせ
        $name = $request->input('name');
        $name = $request->input('age');
    }
}