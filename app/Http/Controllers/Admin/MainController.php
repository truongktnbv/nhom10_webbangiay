<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UserService;

class MainController extends Controller
{
    protected $user;
    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('admin.main', [
           'title' => 'Trang Quản Trị Admin',
            'users' => $this->user->get()
        ]);
    }
}
