<?php

namespace App\Http\Services\Blog;
use App\Models\Blog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class BlogService
{
    public function getParent()
    {
        return Blog::where('active', 1)->get();
    }

    public function show()
    {
        return Blog::select('name', 'id','image')
            ->orderbyDesc('id')
            ->get();
    }

    public function getAll()
    {
        return blog::orderbyDesc('id')->paginate(20);
    }

    public function create($request)
    {
        try {
            blog::create([
                'name' => (string)$request->input('name'),
                'image' => (string)$request->input('image'),
                'description' => (string)$request->input('description'),
                'content' => (string)$request->input('content'),
                'active' => (string)$request->input('active')
            ]);

            Session::flash('success', 'Tạo blog Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }

    public function update($request, $blog): bool
    {
        $blog->name = (string)$request->input('name');
        $blog->image =(string)$request->input('image');
        $blog->description = (string)$request->input('description');
        $blog->content = (string)$request->input('content');
        $blog->active = (string)$request->input('active');
        $blog->save();

        Session::flash('success', 'Cập nhật thành công blog');
        return true;
    }

    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $menu = Blog::where('id', $id)->first();
        if ($menu) {
            return Blog::where('id', $id)->delete();
        }

        return false;
    }


    public function getId($id)
    {
        return Blog::where('id', $id)->where('active', 1)->firstOrFail();
    }


}
