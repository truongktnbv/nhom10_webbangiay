<?php

namespace App\Http\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class customerService
{
    public function created($request)
    {
        try {
            Customer::create([
                'name' => (string)$request->input('name'),
                'phone' => (int)$request->input('phone'),
                'address' => (string)$request->input('address'),
                'email' => (string)$request->input('email'),
                'password' => Hash::make((string)$request->input('password')),
            ]);
            Session::flash('success', 'Tạo Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
    public function getParent()
    {
        return Customer::select('name','phone','email','address')->get();
    }
    public function update($request, $customer): bool
    {

        $customer->name = (string)$request->input('name');
        $customer->phone =(string)$request->input('phone');
        $customer->address = (string)$request->input('address');
        $customer->email = (string)$request->input('email');
        $customer->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');
        return true;
    }
    public function getAll()
    {
        return Customer::orderbyDesc('id')->paginate(20);
    }
    public function delete($request)
    {
        $customer = Customer::where('id', $request->input('id'))->first();
        if ($customer) {
            $customer->delete();
            return true;
        }

        return false;
    }
    public function search($search)
    {
        return Customer::where('name','like','%'.$search. '%')
            ->orderByDesc('id')
            ->limit(12)
            ->get();
    }
}
