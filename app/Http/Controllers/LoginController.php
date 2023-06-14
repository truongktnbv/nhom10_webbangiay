<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\customerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    protected $customerService;

    public function __construct(customerService $customerService)
    {
        $this->customerService = $customerService;
    }
    public function index(){
        return view('login.login',[
           'title'=>'Đăng nhập'
        ]);
    }

    public function signup(){
        return view('login.signup',[
            'title'=>'Đăng ky'
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $this->customerService->created($request);

        return redirect()->action([LoginController::class, 'index']);
    }
    public function login(Request $request)
    {
    $this -> validate($request,[
        'email' => 'required|email:filter',
        'password' =>'required'
    ],[
        'email.required'=>'Bạn chưa nhập email',
        'password.required'=>'Bạn chưa nhập password'
    ]);
        if(Auth::guard('customer')->attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ], $request -> input('remember'))){

            return redirect()->action([MainController::class,'index']);
        }
        \Illuminate\Support\Facades\Session::flash('error','email hoặc mật khẩu không đúng');
        return redirect()->back();

}
}
