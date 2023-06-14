<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Services\customerService;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(customerService $customer)
    {
        $this->customer = $customer;
    }
    public function index()
    {
        return view('admin.users.customer', [
            'title' => 'Danh Sách Khách hàng',
            'customers' => $this->customer->getAll()
        ]);
    }
    public function show(Customer $customer)
    {
        return view('admin.users.editcutomer', [
            'title' => 'Chỉnh Sửa Slider',
            'customer' => $customer
        ]);
    }
    public function update(Request $request,Customer $customer)
    {
        $result = $this->customer->update($request, $customer);
        if ($result) {
            return redirect('/admin/customers');
        }

        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result = $this->customer->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
    public function search(Request $request)
    {
        $search= $request->input('search-customer');
        $customers = $this->customer->search($search);
        return view('admin.users.search',[
            'title' => 'timkiem',
            'customers' => $customers
        ]);

    }
}
