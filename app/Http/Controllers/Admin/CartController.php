<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Services\CartService;

class CartController extends Controller
{
    protected $cart;
    public function __construct(CartService $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        return view('admin.carts.customer', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'orders' => $this->cart->getCustomer()
        ]);
    }

    public function show(Order $order)
    {
        $carts = $this->cart->getProductForCart($order);

        return view('admin.carts.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $order->name,
            'order' => $order,
            'carts' => $carts
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->cart->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công sản phẩm'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
    public function search(Request $request)
    {
        $search= $request->input('search-customer');
        $orders = $this->cart->search($search);
        return view('admin.carts.search',[
            'title' => 'timkiem',
            'orders' => $orders
        ]);

    }
}
