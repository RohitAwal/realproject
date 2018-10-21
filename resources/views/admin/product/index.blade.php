@extends('admin.common.layout')

@section('content')

     <section class="content-header">
            <h1>
                Products of BPC
                <small>List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Responsive Hover Table</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </tr>
                                @if(isset($products) && count($products)>0)
                                    @php($i = 1)
                                    @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>rs. {{ $product->price }}</td>
                                    <td>
                                        <img src="{{ asset('image/image/'.$product->image) }}" width="100px;" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('product.edit',$product->id) }}" class="btn  btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('product.destroy',$product->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn  btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                        <form id="delete-form" action="{{ route('product.destroy',$product->id) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif

                                </tbody></table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->

@endsection