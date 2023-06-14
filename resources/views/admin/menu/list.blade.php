@extends('admin.main')

@section('content')
    <div class="form-inline">
        <div class="input-group" >
            <form action="/admin/menus/search" method="post">
            <input class="form-control form-control-sidebar" name="search-menu" type="search" placeholder="Search" >
     
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
       
                @csrf
            </form>
        </div>
    </div>
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
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::menu($menus) !!}
        </tbody>
    </table>
@endsection
