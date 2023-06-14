@extends('admin.main')

@section('content')
    <div class="form-inline">
        <div class="input-group" >
            <form action="/admin/search" method="post">
                <input class="form-control form-control-sidebar" name="search-customer" type="search" placeholder="Search" >
    
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
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt hàng</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $key => $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/orders/view/{{ $order->id }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $order->id }}, '/admin/orders/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
        {!! $orders->links() !!}
    </div>
@endsection


