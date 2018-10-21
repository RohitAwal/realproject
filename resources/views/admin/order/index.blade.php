@extends('admin.common.layout')

@section('content1')

     <section class="content-header">
            <h1>
                Ordered Goods
                <small>list</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List of Ordered Goods</h3>


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
                                @if(isset($orders) && count($orders)>0)
                                    @php($i = 1)
                                    @foreach($orders as $product)
                                       @php($name = \App\Models\Product::find($product->product_id))
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $name->name or '' }}</td>
                                    <td>rs. {{ $name->price or '' }}</td>
                                    <td>
                                        @if(isset($name->image))
                                        <img src="{{ asset('image/image/'.$name->image) }}" width="100px;" alt="">
                                            @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('product.destroy',$product->id) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();" class="btn  btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                        <form id="delete-form" action="{{ route('order.destroy',$product->id) }}" method="POST" style="display: none;">
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