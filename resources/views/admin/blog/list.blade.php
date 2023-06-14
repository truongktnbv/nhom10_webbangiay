@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Active</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        <tbody>
        @foreach($blogs as $key => $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->name }}</td>
                <td><a href="{{ $blog->image }}" target="_blank">
                        <img src="{{ $blog->image}}" height="40px">
                    </a>
                </td>
                <td>{!! \App\Helpers\Helper::active($blog->active) !!}</td>
                <td>{{ $blog->updated_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/blogs/edit/{{ $blog->id }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $blog->id }}, '/admin/blogs/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $blogs->links() !!}
@endsection
