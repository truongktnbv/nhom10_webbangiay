<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\blog\BlogService;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    public function create()
    {
        return view('admin.blog.add', [
            'title' => 'Thêm blog Mới',
            'menus' => $this->blogService->getParent()
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $this->blogService->create($request);

        return redirect()->back();
    }
    public function index()
    {
        return view('admin.blog.list', [
            'title' => 'Danh Sách blog Mới Nhất',
            'blogs' => $this->blogService->getAll()
        ]);
    }
    public function show(Blog $blog)
    {
        return view('admin.blog.edit', [
            'title' => 'Chỉnh Sửa blog: ' . $blog->name,
            'blog' => $blog,
            'blogs' => $this->blogService->getParent()
        ]);
    }

    public function update(Blog $blog, CreateFormRequest $request)
    {
        $this->blogService->update($request, $blog);

        return redirect('/admin/blogs/list');
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->blogService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công '
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
