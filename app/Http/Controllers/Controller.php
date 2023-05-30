<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use app\Models\ViewNiveis;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {

        $users = ViewNiveis::select(['*'])->get()->toArray();

        //dd($user);
        return compact('users');
    }
}
