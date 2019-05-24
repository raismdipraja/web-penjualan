@extends('layouts.app')

@section('content')
<div class="container col-md-8">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Product</h2>
            <div>
            
                <a href="{{route('admin.products.create')}}" class="btn btn-primary"><i class="fa fa-calendar-plus-o" style="font-size:20px"></i>Tambah Produk</a>
            </div>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product['id']}}</td>
                                <td>{{$product['name']}}</td>
                                <td>{{$product['price']}}</td>
                                <td>{{$product['created_at']}}</td>
                                <td width=5%>
                                    <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-outline-primary"><i class="fa fa-edit" style="font-size:24px"></i>
Edit</a>
                                </td>
                                <td width=5%>
                                    <a href="{{route('admin.products.show',$product->id)}}" class="btn btn-outline-success"><i class="fa fa-eyedropper" style="font-size:24px"></i>
Detail</a>
                                </td>
                                <td>                                                             
                                    <form action="{{route('admin.products.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-outline-danger" onclick="return confirm('Yakin Mau di Hapus ?')" type="submit"><i class="fa fa-trash" style="font-size:24px"></i>
Delete</button>
                                    </form>
                                </td>
                            
                            <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection