@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên bài viết</label>
                <input type="text" name="name" value="{{ $blog->name }}" class="form-control"  placeholder="Nhập tên blog">
            </div>



            <div class="form-group">
                <label>nội dung </label>
                <textarea name="description" class="form-control">{{ $blog->description }}</textarea>
            </div>

            <div class="form-group">
                <label>nội dung Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $blog->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Ảnh bài viết</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">
                    <a href="{{ $blog->image }}">
                        <img src="{{ $blog->image}}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="image" value="{{ $blog->image }}" id="image">
            </div>

            <div class="form-group">
                <label>Kích Hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active"
                           name="active" {{ $blog->active == 1 ? 'checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active"
                           name="active" {{ $blog->active == 0 ? 'checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

