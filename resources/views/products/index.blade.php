@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel CRUD</h2>
            </div>
            @auth
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                </div>
            @endauth
            
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    @auth
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endauth
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $products->links() }}

@endsection