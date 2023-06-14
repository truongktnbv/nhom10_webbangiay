<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
class ShopController extends Controller
{

    protected $menu;
    protected $product;

    public function __construct( MenuService $menu, ProductService $product)
    {

        $this->menu = $menu;
        $this->product = $product;
    }

    public function index()
    {
        return view('shop', [
            'title' => 'NTTShop',
            'menus' => $this->menu->show(),
            'products' => $this->product->get1()
        ]);
    }
    public function loadProduct(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->product->get1($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result])->render();

            return response()->json(['html' => $html]);
        }

        return response()->json(['html' => '']);
    }
    public function search(Request $request)
    {
        $search= $request->input('search');
        $products = $this->product->search($search);
        return view('search',[
            'title' => 'NTTShop',
            'menus' => $this->menu->show(),
            'products'=> $products
        ]);

    }
}
