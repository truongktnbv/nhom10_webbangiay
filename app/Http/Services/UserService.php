<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class UserService
{


    public function get()
    {
        return User::select('name','email')
           ->where('id',1)
            ->get();
    }

}
