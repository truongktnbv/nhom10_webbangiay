<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\blog\BlogService;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard.dashboard', [
            'title' => 'Thong ke',
        ]);
    }
}
