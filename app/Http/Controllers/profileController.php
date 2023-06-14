<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Http\Services\customerService;
use App\Models\Customer;
class profileController
{
    protected $product;
    protected $customerservice;

    public function __construct(ProductService $product,customerService $customerservice)
    {
        $this->product = $product;
        $this->customerservice=$customerservice;
    }
    public function index(Customer $customer)
    {
        return view('profile',[
            'title'=>'profile',
            'products' => $this->product->get(),
            'customer'=>$customer,
            'customers'=>$this->customerservice->getParent()
        ]);
    }
    public function update(Customer $customer, CreateFormRequest $request)
    {
        $this->customerservice->update($request, $customer);

        return redirect()->back();
    }
}
